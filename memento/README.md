# Memento

Memo files for HTML, CSS, JavaScript, PHP, Python, Java, Kotlin, Android Studio, C, Linux, Git, Docker, Jetbeans.


## Structure du site memento

index.html
README.md

**[images]**
	**[appli]**
	**[outilsDev]**
	**[web]**
	**[general]**

**[styles]**
	--> fond.jpg (body background)
	--> prism.css (code coloring online)
	--> prism (JS executed for code coloring on line)

**[sources]**
	**[appli]**
		--> appli.html (index for the group appli)
		--> header.html (header for the group appli)
		--> python.html (Python)
		--> java.html (Java)
		--> c.html (C)
		--> android.html (Android Studio)
		--> kotlin.html (Kotlin)
	**[outilsDev]**
		--> outilsDev.html (index for the group outilsDev)
		--> header.html (header for the group outilsDev)
		--> git.html (Git)
		--> docker.html (Docker)
		--> linux.html (Linux)
		--> jetbeans.html (Jetbeans)
	**[web]**
		--> web.html (index for the group web)
		--> html.html (HTML)
		--> css.html (CSS)
		--> javascript.html (JavaScript)
		--> php.html (PHP)
	**[general]**
		--> fonctionsJS.htnl (JS functions for the whole site)
		--> footer.htnl (footer for the whole site)
		--> head_index.htnl (head for index.html)
		--> head.htnl (head for the whole site but index.html)
		--> header_index.htnl (header for index.htnl)
		--> modelePage.php (model for any page of the site, which is calling java.html, python.html, ... as a content)


## Structure des pages du site memento


header (navigation)
|| principal ||||||||||||||||||||||||||||||||||||
|| tableMatieres      == grandContenu =========||
||                    == bandeau_sousTitre   ==||
||					  == bandeau_contenu     ==||
||					  == bandeau_controle    ==||
||                    == contenu             ==||
||                    =========================||
|||||||||||||||||||||||||||||||||||||||||||||||||
footer

  
## TODO

* calibrate headers
* calibrate tableMatieres


  
  
  
  
  
  
  
  
  
  
