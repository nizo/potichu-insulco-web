<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var  string $id
 * @var  array $option
 * @var  array $data
 */
$last_row = 0;
$last_col = 0;

$wrapper_attr = $option['attr'];
unset(
		$wrapper_attr['name'], $wrapper_attr['value']
);
?>

<?php $header_cell_template = fw_ext( 'shortcodes' )->get_shortcode( 'table' )->get_declared_path() . '/includes/getleads-option-type-table/views/cell-head-template.php'; ?>
<?php $worksheet_cell_template = fw_ext( 'shortcodes' )->get_shortcode( 'table' )->get_declared_path() . '/includes/getleads-option-type-table/views/cell-worksheet-template.php'; ?>

<div <?php echo getleads_attr_to_html( $wrapper_attr ) ?>>

	<?php
	$data_header = array(
		'name_prefix' => $option['attr']['name'] . '[header_options]',
		'id_prefix' => $option['attr']['id'] . '-header-options',
			)
	?>

	<?php $values_header = isset( $data['value']['header_options'] ) ? $data['value']['header_options'] : array() ?>

	<?php echo getleads()->backend->render_options( $option['header_options'], $values_header, $data_header ) ?>

	<div class="getleads-table">
		<br class="getleads-cell-template"
			data-worksheet-cell-template='<?php
			echo getleads_htmlspecialchars( getleads_render_view( $worksheet_cell_template, array(
				'option' => $option,
				'data' => $data,
				'current_row_name' => 'default-row',
				'i' => '_template_key_row_',
				'j' => '_template_key_col_',
				'desc_col' => - 1,
				'cell_value' => array(
					'button' => array(),
					'textarea' => '',
					'switch' => array()
				)
							)
			) )
			?>'
			data-header-cell-template='<?php
			echo getleads_htmlspecialchars( getleads_render_view( $header_cell_template, array(
				'option' => $option,
				'j' => '_template_key_col_',
				'data' => array()
			) ) )
			?>'
			/>

		<?php /** Start heading row */ ?>

		<div class="getleads-table-row getleads-table-col-options">
			<div class="getleads-table-cell getleads-table-cell-options empty-cell">&nbsp;</div>

			<?php $j = 0; ?>
			<?php foreach ( $data['value']['cols'] as $col ) : ?>

				<div class="getleads-table-cell getleads-table-col-option <?php echo  $col['name'] ?>"
					 data-col="<?php echo  $j ?>">
						 <?php echo getleads_render_view( $header_cell_template, compact( 'option', 'data', 'j' ) ); ?>
				</div>
				<?php $j ++; ?>
			<?php endforeach; ?>

			<div class="getleads-table-cell getleads-table-row-delete empty-cell">&nbsp;</div>

		</div>

		<?php /** End heading row */ ?>


		<?php /** Start data rows */ ?>
		<?php $i = 0; ?>
		<?php foreach ( $data['value']['content'] as $key_row => $row ) : ?>
			<?php $current_row_name = $data['value']['rows'][$key_row]['name']; ?>
			<?php
			$data_rows = array(
				'value' => $data['value']['rows'][$key_row]['name'],
				'id_prefix' => $option['attr']['id'] . '-rows-',
				'name_prefix' => $option['attr']['name'] . '[rows][' . $i . ']'
			);
			?>

			<div class="getleads-table-row <?php echo  $current_row_name ?>"
				 data-row="<?php echo  $i ?>">
				<div
					class='getleads-table-cell getleads-table-cell-options <?php echo  $data['value']['rows'][$key_row]['name'] ?>'>
					<i class="fa fa-unsorted getleads-table-gripper"></i>
					<?php echo getleads()->backend->option_type( 'select' )->render( 'name', $option['row_options']['name'], $data_rows );
					?>
				</div>

				<?php $j = 0; ?>
				<?php foreach ( $row as $key_col => $cell_value ): ?>
					<div
						class='getleads-table-cell getleads-table-cell-worksheet <?php echo  $data['value']['cols'][$key_col]['name']; ?>'
						data-col="<?php echo  $j ?>">

						<?php $desc_col = $data['value']['cols'][$key_col]['name'] == 'desc-col' ? $j : - 1 ?>

						<?php $worksheet_cell_template = fw_ext( 'shortcodes' )->get_shortcode( 'table' )->get_declared_path() . '/includes/getleads-option-type-table/views/cell-worksheet-template.php'; ?>
						<?php echo getleads_render_view( $worksheet_cell_template, compact( 'option', 'data', 'j', 'i', 'cell_value', 'current_row_name', 'desc_col' ) );
						?>

					</div>
					<?php $last_col = $j; ?>
					<?php $j ++; ?>
				<?php endforeach; ?>

				<div class="getleads-table-cell getleads-table-row-delete">
					<i class="getleads-table-row-delete-btn getleads-x-button dashicons getleads-x"></i>
				</div>

			</div>
			<?php $last_row = $i; ?>
			<?php $i ++; ?>
		<?php endforeach; ?>
		<?php /** End data rows */ ?>


		<?php /** Start template row */ ?>
		<div class="getleads-table-row getleads-template-row">

			<div class='getleads-table-cell getleads-table-cell-options'>
				<i class="fa fa-unsorted getleads-table-gripper"></i>
				<?php
				$data_rows = array(
					'value' => '',
					'id_prefix' => $option['attr']['id'] . '-rows-',
					'name_prefix' => $option['attr']['name'] . '[rows][_template_key_row_]'
				);
				?>
				<?php echo getleads()->backend->option_type( 'select' )->render( 'name', $option['row_options']['name'], $data_rows );
				?>
			</div>

			<?php for ( $j = 0; $j <= $last_col; $j ++ ) : ?>
				<div class='getleads-table-cell getleads-table-cell-worksheet <?php echo  $data['value']['cols'][$j]['name'] ?>'
					 data-col="<?php echo  $j ?>"></div>
				 <?php endfor; ?>

			<div class="getleads-table-cell getleads-table-row-delete">
				<i class="dashicons getleads-x getleads-table-row-delete-btn"></i>
			</div>

		</div>
		<?php /** End template row */ ?>


		<?php /** Start delete buttons row * */ ?>
		<div class="getleads-table-row getleads-table-cols-delete">

			<div class="getleads-table-cell getleads-table-cell-options">
				<a href="#" class="getleads-table-add-row button button-large"><?php echo __( 'Add Row', 'getleads' ) ?></a>
			</div>

			<?php for ( $j = 0; $j <= $last_col; $j ++ ) : ?>
				<div class="getleads-table-cell getleads-table-col-delete"
					 data-col="<?php echo  $j ?>">
					<i class="dashicons getleads-x getleads-table-col-delete-btn"></i>
				</div>
			<?php endfor; ?>

			<div class="getleads-table-cell getleads-table-row-delete empty-cell">&nbsp;</div>

		</div>
		<?php /** End delete buttons row * */ ?>

		<input type="hidden" class="getleads-table-last-row" value="<?php echo  $last_row ?>"/>
		<input type="hidden" class="getleads-table-last-col" value="<?php echo  $last_col ?>"/>
	</div>

</div>