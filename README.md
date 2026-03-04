# Simulación de Phishing - Portal OTI UNI 🛡️💻

Este proyecto fue desarrollado con fines estrictamente educativos para la asignatura de **Ethical Hacking** en la **Universidad Nacional de Ingeniería (UNI)**.

## 📝 Descripción
El objetivo de la actividad fue demostrar la efectividad de los ataques de ingeniería social mediante la clonación de una interfaz institucional y el procesamiento de datos a través de un backend local.

## 🛠️ Tecnologías utilizadas
* **Frontend:** HTML5 y CSS3 (clonación estética del portal OTI).
* **Backend:** PHP para la interceptación y almacenamiento de logs.
* **Servidor Local:** XAMPP (Apache).
* **Tunneling:** Ngrok (HTTP Tunneling).

## 🚀 Hallazgos interesantes
Durante la fase de publicación, el servicio **Ngrok** activó sus mecanismos de defensa heurística, detectando el vector de ataque y bloqueando el túnel bajo el error `ERR_NGROK_3208`. Esto evidencia la robustez de los sistemas de prevención de phishing modernos en la capa de red.

## ⚠️ Disclaimer
Este repositorio no promueve actividades ilícitas. Su propósito es concienciar sobre la importancia de la validación de URLs y certificados SSL/TLS.
