@echo off
cd /d "E:\Proyecto rafa\Personal_HelpDesk"
echo ============================================
echo ACTUALIZANDO REPOSITORIO EN GITHUB
echo ============================================

set /p mensaje=Escribe el mensaje del commit: 
git add .
git commit -m "%mensaje%"
git push origin main

echo ============================================
echo ¡Cambios subidos correctamente!
pause



git pull origin main
git add .
git commit -m "Actualización del proyecto"
git push origin main