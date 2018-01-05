@echo off

REM color 0a
title Eshop Potichu - Deployment Tool

:CheckIfDeployFeasible
echo.
echo.
echo Check if deploy feasible
echo ========================
GOTO PrepareDeploy

:PrepareDeploy
echo.
echo.
echo Build app
echo =========
call gulp
GOTO PushToGit

:PushToGit
echo.
echo.
echo Push to git
echo ===========
set /p description="Enter commit description: "
call git commit -m "%description%" -a
GOTO Deploy

:Deploy
echo.
echo.
echo Deploy
echo ======
echo.
echo Select deployment destination
echo 0. beta
echo 7. eshop.potichu.sk
echo 8. eshop.potichu.cz
echo 9. all
echo.

set /p a=
if %a%==0 (
	phploy --server potichu-beta
)

if %a%==7 (
	phploy --server potichu-sk
)

if %a%==8 (
	phploy --server potichu-cz
)

if %a%==9 (	
	phploy
)

pause