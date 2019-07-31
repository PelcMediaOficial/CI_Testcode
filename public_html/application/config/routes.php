<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';

$route['descarga'] = "PdfController";
$route['tareas'] = "TaskController";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
