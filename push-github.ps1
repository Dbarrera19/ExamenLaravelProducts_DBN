#!/usr/bin/env pwsh

# Script para subir el proyecto a GitHub
$projectPath = "C:\Users\CampusFP\Desktop\Daniel_Barrera\Laravel\ExamenLaravel_DBN"
$githubRepo = "https://github.com/Dbarrera19/ExamenLaravel2_DBN.git"

Set-Location $projectPath

# Configurar Git
git config user.name "Daniel Barrera"
git config user.email "daniel@example.com"

# Inicializar repositorio si no existe
if (-not (Test-Path .git)) {
    git init
    git add .
    git commit -m "Proyecto Laravel ExamenLaravel_DBN - Sistema de gestión de productos CRUD"
}

# Agregar remoto
if ((git remote | Select-String "origin") -eq $null) {
    git remote add origin $githubRepo
}

# Cambiar a rama main
git branch -M main

# Push a GitHub
Write-Host "Subiendo proyecto a GitHub..."
git push -u origin main --force

Write-Host "Proyecto subido exitosamente a: $githubRepo"
