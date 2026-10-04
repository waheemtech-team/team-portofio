WAHEEM-TEAM WEBSITE

RUN: put this folder in XAMPP htdocs (or run: php -S localhost:8000 inside it), then open http://localhost/waheem-team/index.php
EDIT: all content is at the top of index.php (section 1).
THEME: $theme = 'navy' or 'gold' at the top of index.php.

ADDING IMAGES (no code needed): just drop the picture in the right folder with the right name. jpg, jpeg, png or webp all work.
  Team photos   -> assets/img/team/       muhammad  isah  tahir  ahmad  mustapha     (example: isah.png)
  Projects      -> assets/img/projects/   p1 ... p10                                  (p1 = first project)
  Store items   -> assets/img/store/      s1 ... s6                                   (s1 = first product)
While an image is missing, the site shows the exact file name to add. Set $showHints = false when you go live.

CONTACT FORM: sends to waheemtechteam@gmail.com through FormSubmit.co (no backend).
  The FIRST time anyone submits the form, FormSubmit emails that address an activation link. Click it once, then all messages arrive normally.
  It must run through a web server (XAMPP or php -S), not by double-clicking the file.
ENROLL BUTTONS: each service and training opens WhatsApp +2349061764966 with its own message (edit them in $services and $training).
