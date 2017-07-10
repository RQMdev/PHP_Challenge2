@echo off
title Sort by Extension.
rem Pour chaque fichier dans le dossier courant.
for %%a in (".\*") do (
    rem Si le fichier à une extension et n'est pas ce script.
    if "%%~xa" NEQ ""  if "%%~dpxa" NEQ "%~dpx0" (
        rem crée un dossier au nom de l'extension.
        if not exist "%%~xa" mkdir "%%~xa"
        rem Déplace le fichier dans son dossier correspondant.
        copy "%%a" "%%~dpa%%~xa\"
    )
)