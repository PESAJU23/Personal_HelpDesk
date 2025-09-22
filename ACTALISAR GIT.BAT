@echo off
echo ============================================
echo Actualizando repositorio Git...
echo ============================================

set /p mensaje=Escribe el mensaje del commit: 

cd /d "E:\Proyecto rafa\Personal_HelpDesk"
git pull
git add .
git commit -m "%mensaje%"
git push

echo ============================================
echo ¡Actualización completada!
pause