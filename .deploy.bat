@echo off

REM color 0a
title Eshop Potichu - Deployment Tool

:CheckIfDeployFeasible
echo "Check if deploy feasible"
GOTO PrepareDeploy

:PrepareDeploy
gulp
GOTO PushToGit

:PushToGit
echo "Pushing to git"
GOTO Deploy

:Deploy
echo Select Deployment Destination
echo.
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