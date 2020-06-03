<?php
function contact_form_sent_handler($entryData) {
	$indexedEntryData = array_values($entryData['form_values']);
	$name = $indexedEntryData[0];
	$email = $indexedEntryData[1];
	$text = $indexedEntryData[2];

	potichu_submit_job_to_pipedrive($indexedEntryData);
}
add_action( 'fw:ext:contact-forms:sent', 'contact_form_sent_handler', 10, 1 );

function potichu_submit_job_to_pipedrive($jobDetails) {
	// $jobDetails should contain following items in following order
	// MENO PRIEZVISKO
	// EMAIL
	// POPIS PROBLEMU

	$api_token = get_option( 'pipedrive_api_token', '' );
	$use_pipedrive = get_option( 'use_pipedrive', false);

	if (!$use_pipedrive || $api_token == '') return;

	$handlerId = get_option( 'pipedrive_handler_person_id', '');
	$stageId = get_option( 'pipedrive_stage_id', '');

	/*
	if (get_option('web_locale', 'sk') === 'sk') {
		$api_token = '4fae12d61eae55ca09ad67d09202559d01349afd';
		$handlerId = 2479848;
		$cityId = 'd939ca8cc6a11101553489d9bd2c9fc84c2930ec';
	} else {
		$api_token = '2dbe5a7e699f15990b5b8fccda79a90ba19af617';
		$handlerId = 3086675;
		$cityId = '3635d1573043f91389788ea00ba3a30caa36ac31';
	}
	*/

	$name = $jobDetails[0];
	$email = $jobDetails[1];
	$note = $jobDetails[2];

	$person = array(
		'name' => $name,
		'email' => $email
	);

	$deal = array(
		'title' => $name . ' - formulár',
		'user_id' => $handlerId
	);
	
	$person_id = get_person_id($api_token, $person);

	// if the person was added successfully add the deal and link it to the organization and the person
	if ($person_id) {
		$deal['person_id'] = $person_id;
		// try adding a person and get back the ID
		$deal_id = create_deal($api_token, $deal);

		if ($deal_id) {
			echo "<br/>Deal added successfully!";
		}

		$activity = array(
			'subject' => 'Dopyt z webstránky - INSULCO',
			'type' => 'task',
			'due_date' => date("Y-m-d"),
			'deal_id' => $deal_id,
			'user_id' => $handlerId,
			'note' =>  $note
		);

		// try setting activity to a deal
		$activity_id = add_activity($api_token, $activity);
		if ($activity_id) {
			echo "<br/>Activity added successfully!";
		}
	} else {
		echo "There was a problem with adding the person!";
	}
}

function get_person_id($api_token, $person) {
	$url = "https://api.pipedrive.com/v1/persons/search?term=" . $person['email'] . "&fields=email&api_token=" . $api_token;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	$output = curl_exec($ch);
	$info = curl_getinfo($ch);
	curl_close($ch);

	$result = json_decode($output, 1);

	if (!empty($result['data']['items'] && !empty($result['data']['items'][0]))) {
		$person_id = $result['data']['items'][0]['item']['id'];
		return $person_id;
	}

	return create_person($api_token, $person);
}

function create_person($api_token, $person) {
	$url = "https://api.pipedrive.com/v1/persons?api_token=" . $api_token;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, true);

	curl_setopt($ch, CURLOPT_POSTFIELDS, $person);
	$output = curl_exec($ch);
	$info = curl_getinfo($ch);
	curl_close($ch);

	// create an array from the data that is sent back from the API
	$result = json_decode($output, 1);
	// check if an id came back
	if (!empty($result['data']['id'])) {
	$person_id = $result['data']['id'];
		return $person_id;
		} else {
		return false;
	}
}

function create_deal($api_token, $deal) {
	$url = "https://api.pipedrive.com/v1/deals?api_token=" . $api_token;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, true);

	curl_setopt($ch, CURLOPT_POSTFIELDS, $deal);
	$output = curl_exec($ch);
	$info = curl_getinfo($ch);
	curl_close($ch);

	// create an array from the data that is sent back from the API
	$result = json_decode($output, 1);
	// check if an id came back
	if (!empty($result['data']['id'])) {
		$deal_id = $result['data']['id'];
		return $deal_id;
		} else {
		return false;
	}
}

function add_activity($api_token, $activity) {
	$url = "https://api.pipedrive.com/v1/activities?api_token=" . $api_token;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, true);

	curl_setopt($ch, CURLOPT_POSTFIELDS, $activity);
	$output = curl_exec($ch);
	$info = curl_getinfo($ch);
	curl_close($ch);

	// create an array from the data that is sent back from the API
	$result = json_decode($output, 1);
	// check if an id came back
	if (!empty($result['data']['id'])) {
		$activity_id = $result['data']['id'];
		return $activity_id;
		} else {
		return false;
	}
}
?>