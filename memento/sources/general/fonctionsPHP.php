<?php

function titre($nomPage){
	switch ($nomPage){
		case "html.html":
			return "HTML";
		case "css.html":
			return "CSS";
		case "javascript.html":
			return "JAVASCRIPT";
		case "php.html":
			return "PHP";
		case "web.html":
			return "WEB DEVELOPMENT";
		case "docker.html":
			return "DOCKER";
		case "git.html":
			return "GIT";
		case "jetbeans.html":
			return "JETBEANS";
		case "linux.html":
			return "LINUX";
		case "outilsDev.html":
			return "OUTILS DE DEVELOPPEMENT";
		case "android.html":
			return "ANDROID";
		case "appli.html":
			return "LANGAGES SOFT";
		case "c.html":
			return "C";
		case "java.html":
			return "JAVA";
		case "kotlin.html":
			return "KOTLIN";
		case "python.html":
			return "PYTHON";
	}
}

function groupe($nomGroupe){
	switch ($nomGroupe){
		case "appli":
			return "Software languages";
		case "outilsDev":
			return "Outils de développement";
		case "web":
			return "Web development";
	}
}
?>