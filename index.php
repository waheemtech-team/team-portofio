<?php
/* ==========================================================
   WAHEEMTECH (waheem-team) portfolio: everything PHP is in this one file.
   CSS  -> css/style.css      JS -> js/main.js
   Pages: index.php (home)  |  index.php?page=contact (contact page)
   ========================================================== */

/* ===== 1. SITE DATA (edit your content here) ===== */
/* ===== EDIT YOUR SITE CONTENT HERE ===== */
$contact = [
  'email' => 'Waheemtech@gmail.com',      // shown on the site
  'form_email' => 'waheemtechteam@gmail.com', // contact form messages are delivered here
  'wa'    => '2349061764966',             // main WhatsApp (international format, no +)
  'wa2'   => '2349115061445',             // second WhatsApp
  'phone' => '+234 906 176 4966',
  'phone2'=> '+234 911 506 1445',
  'tg'    => 'waheemtech02',
  'ig'    => 'waheemtech001',
  'tt'    => 'WAHEEMTECH',
  'loc'   => 'Nigeria',
];
$theme = 'navy';   // 'navy' (cyan on navy) or 'gold' (black and gold, matches your flyer)
$tagline = ['Innovate','Secure','Automate','Educate','Elevate'];

// Finds an image automatically. Give it the path WITHOUT extension; it accepts jpg, jpeg, png or webp.
function img($base) { foreach (['jpg','jpeg','png','webp'] as $e) if (file_exists(__DIR__ . "/$base.$e")) return "$base.$e"; return null; }
// Makes a WhatsApp link that opens a chat with your number and a ready-typed message.
function wa($msg) { global $contact; return 'https://wa.me/' . $contact['wa'] . '?text=' . rawurlencode($msg); }
$showHints = true;   // true = empty image slots show the file name to add. Set to false when the site goes live.

// Put photos in assets/img/team/<photo>.jpg  (square, 600x600 works best)
$team = [
  ['name'=>'Muhammad Muhammad Sarkin Bariki','short'=>'CEO & Founder','role'=>'CEO & Founder | Managing Director','photo'=>'muhammad','linkedin'=>'#',
   'bio'=>'Leads WaheemTech across Deep-Tech and Fintech: embedded systems, AI/ML, ethical hacking, blockchain/DeFi, digital lending and fintech SaaS.',
   'does'=>['Sets the vision, strategy and roadmap','Leads investor relations and partnerships','Oversees Deep-Tech and Fintech units']],
  ['name'=>'Isah','short'=>'Chief Technology & Creative Officer','role'=>'Chief Technology & Creative Officer (CTCO)','photo'=>'isah','linkedin'=>'#',
   'bio'=>'Cybersecurity expert who secures our infrastructure and client systems and leads the technical and creative direction of every product.',
   'does'=>['Runs security, ethical hacking and pen-testing','Architects technical infrastructure','Mentors the engineering team']],
  ['name'=>'Tahir','short'=>'Software Engineer & Data Analyst','role'=>'Software Engineer & Data Analyst','photo'=>'tahir','linkedin'=>'#',
   'bio'=>'Full-stack developer and data scientist who builds the platforms and data-driven solutions behind our fintech and deep-tech products.',
   'does'=>['Builds web and mobile applications','Designs databases, APIs and backends','Delivers analysis and ML models']],
  ['name'=>'Ahmad','short'=>'Tech Consultant & Digital Marketing SEO','role'=>'Tech Consultant & Digital Marketing SEO','photo'=>'ahmad','linkedin'=>'#',
   'bio'=>'Connects technology to the market through SEO, UI/UX design, drone systems and IoT, and advises clients on digital transformation.',
   'does'=>['Runs SEO, SEM and marketing strategy','Designs UI/UX for products','Leads drone and IoT project delivery']],
  ['name'=>'Mustapha Ibrahim','short'=>'Head of Communication & Growth','role'=>'Head of Communication & Content | Growth Lead','photo'=>'mustapha','linkedin'=>'#',
   'bio'=>'The voice and visual identity of WaheemTech: content, graphic design and video production that grow our audience and community.',
   'does'=>['Creates written, visual and video content','Designs brand and social assets','Grows community and engagement']],
];

// Each service: [icon, title, description, WhatsApp message sent when the client clicks Enroll]
$services = [
  ['💻','Web & Mobile App Development','Websites, web apps and mobile apps built to scale.','Hello WaheemTech, I want to enroll for your Web & Mobile App Development service. I need a website/app built. Please tell me the process, timeline and price.'],
  ['🛡️','Ethical Hacking & Penetration Testing','Find and fix weaknesses before attackers do.','Hello WaheemTech, I am interested in your Ethical Hacking & Penetration Testing service. I want my website/system tested for security weaknesses. Please share the details and price.'],
  ['☁️','Cloud & Infrastructure Security','Secure cloud setups, servers and networks.','Hello WaheemTech, I want to enroll for Cloud & Infrastructure Security. I need help securing my cloud, servers or network. Please advise how we can start.'],
  ['🔌','Embedded Systems & IoT Solutions & Consulting','Firmware, sensors and connected devices from prototype to product.','Hello WaheemTech, I want to enroll for your Embedded Systems & IoT Solutions service. I have a device/IoT project idea and need consulting or development. Please contact me.'],
  ['🤖','AI Agents & AI Automation Solutions & Consulting','AI agents and workflows that automate repetitive business tasks.','Hello WaheemTech, I am interested in AI Agents & AI Automation for my business. Please explain what you can automate and how much it costs.'],
  ['📣','Digital Marketing & Social Media Management','Campaigns, content and page management that grow your audience.','Hello WaheemTech, I want to enroll for Digital Marketing & Social Media Management. I need help growing my brand online. Please share your packages.'],
  ['📈','Financial Markets Analysis & FinTech Consulting','Market analysis and advice for fintech products and trading.','Hello WaheemTech, I am interested in Financial Markets Analysis & FinTech Consulting. Please tell me how your service works and the cost.'],
  ['💼','Business & Technology Consulting','Practical guidance on technology choices and digital transformation.','Hello WaheemTech, I want to book Business & Technology Consulting for my business. Please let me know how to schedule a consultation.'],
  ['🧠','AI & Machine Learning Solutions','Models and data products that turn your data into decisions.','Hello WaheemTech, I want to enroll for AI & Machine Learning Solutions. I have a problem/data I want to solve with AI. Please contact me to discuss.'],
  ['💬','Communication & Critical Thinking','Clear communication and problem-solving skills for teams and individuals.','Hello WaheemTech, I want to enroll for your Communication & Critical Thinking service for myself/my team. Please share the details and price.'],
];
// Each training track: [title, description, WhatsApp message sent when the client clicks Enroll]
$training = [
  ['AI Automation & AI Education','Learn to build AI automations and use AI tools at work.','Hello WaheemTech, I want to enroll in your AI Automation & AI Education training. Please send me the course details, duration, fee and start date.'],
  ['Embedded Systems & Robotics Education','Hands-on microcontrollers, sensors, IoT and robotics.','Hello WaheemTech, I want to enroll in your Embedded Systems & Robotics Education training. Please send me the course details, duration, fee and start date.'],
  ['Ethical Hacking & Cybersecurity Education','Practical hacking and defence skills, step by step.','Hello WaheemTech, I want to enroll in your Ethical Hacking & Cybersecurity Education training. Please send me the course details, duration, fee and start date.'],
  ['Financial Markets Education','Understand and analyse Forex, crypto and stock markets.','Hello WaheemTech, I want to enroll in your Financial Markets Education class. Please send me the details, duration, fee and how to register.'],
  ['Software Development & Coding Education','Learn to code and build real web and mobile projects.','Hello WaheemTech, I want to enroll in your Software Development & Coding Education training. Please send me the course details, duration, fee and start date.'],
  ['Digital Marketing & AI Video Production Education','Marketing, content and AI-powered video creation.','Hello WaheemTech, I want to enroll in your Digital Marketing & AI Video Production Education training. Please send me the course details, duration, fee and start date.'],
];
$collabs = ['M.I Tech','Hamad Tech','Shafi Tech','ARMTEQ Tech'];

// Add your real screenshots in assets/img/projects/p1.jpg ... p10.jpg
$projects = [
  ['Smart Home Controller','Mobile-controlled IoT hub for lights, locks and energy monitoring.','IoT',190],
  ['Farm Drone Monitor','Drone and sensor system that tracks crop health and soil moisture.','Drone',140],
  ['PayFlow Wallet','Fintech wallet with transfers, bill payments and virtual accounts.','Fintech',210],
  ['LendBridge','Digital lending platform with credit scoring and repayment tracking.','Fintech',260],
  ['SecureScan Suite','Automated vulnerability scanner with clear, prioritised reports.','Security',350],
  ['DeFi Yield Dashboard','Web3 dashboard for staking, swaps and portfolio analytics.','Blockchain',280],
  ['Crop Price Predictor','ML model that forecasts market prices for local farmers.','AI/ML',120],
  ['Robotic Arm Kit','Programmable robotic arm with a web control panel.','Robotics',30],
  ['School Result Portal','Web portal for results, fees and parent notifications.','Software',170],
  ['Brand Growth Campaign','SEO and social campaign that tripled traffic for a retail client.','Marketing',320],
];

// STORE: add or remove items here. Images: assets/img/store/s1.jpg ...
$store = [
  ['School Management System','Complete portal with results, fees and attendance. Source code and setup included.','₦150,000','Web App',200],
  ['Loan App Starter Kit','Ready digital lending app with admin panel and repayment engine.','₦250,000','Fintech',260],
  ['Smart Home IoT Kit','Firmware, mobile app and wiring guide for a home automation build.','₦90,000','IoT',190],
  ['Crypto Portfolio Tracker','Live portfolio and price alert dashboard for Web3 users.','₦70,000','Blockchain',280],
  ['Business Website Template','Fast, SEO-ready multi-page website for small businesses.','₦35,000','Website',160],
  ['Attendance Tracker (RFID)','Hardware and software attendance system for schools and offices.','₦120,000','IoT',140],
];

$partners = [
  ['CAC','fa-solid fa-building','#22d3ee','CAC Nigeria'],['EFCC','fa-solid fa-shield-halved','#22c55e','EFCC'],
  ['Google','fa-brands fa-google','#ef4444','Google'],['Paystack','fa-solid fa-credit-card','#38bdf8','Paystack'],
  ['Hostinger','fa-solid fa-database','#8b5cf6','Hostinger'],['AWS','fa-brands fa-aws','#f59e0b','Amazon AWS'],
  ['Microsoft','fa-brands fa-microsoft','#0ea5e9','Microsoft'],['LinkedIn','fa-brands fa-linkedin','#3b82f6','LinkedIn'],
];

/* ===== 2. CONTACT FORM (no backend: messages go straight to your email via FormSubmit.co) ===== */
$status = isset($_GET['sent']) ? 'ok' : '';
$v = ['name'=>'','email'=>'','subject'=>$_GET['subject'] ?? '','message'=>''];
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$next = $scheme . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . strtok($_SERVER['REQUEST_URI'] ?? '/index.php', '?') . '?page=contact&sent=1';

/* ===== 3. WHICH PAGE TO SHOW ===== */
$page  = (($_GET['page'] ?? '') === 'contact') ? 'contact' : 'home';
$title = $page === 'contact' ? 'Contact Us | WaheemTech' : 'WaheemTech | Deep-Tech & Fintech Innovation';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= htmlspecialchars($title ?? 'WaheemTech') ?></title>
<meta name="description" content="WaheemTech (waheem-team): Nigerian Deep-Tech and Fintech team building embedded systems, AI, cybersecurity, software and fintech products.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&family=Space+Mono:wght@400;700&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body class="<?= ($theme ?? 'navy') ?>">
<header class="nav">
  <a class="brand" href="index.php"><span class="logo">WT</span><span>WAHEEMTECH-TEAM</span></a>
  <button class="burger" aria-label="Menu" onclick="document.body.classList.toggle('open')"><i class="fa-solid fa-bars"></i></button>
  <nav>
    <a href="index.php#about">About Us</a><a href="index.php#services">Services</a><a href="index.php#team">Team</a>
    <a href="index.php#portfolio">Portfolio</a><a href="index.php#store">Store</a>
    <a class="btn sm" href="index.php?page=contact">Contact Us</a>
  </nav>
</header>

<?php if ($page === 'contact'): ?>
<!-- ===== CONTACT PAGE ===== -->
<section class="page"><div class="wrap">
  <h2>Contact Us</h2>
  <p class="lead">Tell us about your project, a training request or a store purchase. We reply within one business day.</p>
  <div class="cgrid">
    <div>
      <div class="cl"><i class="fa-solid fa-envelope"></i><div><small>Gmail</small><a href="mailto:<?= $contact['email'] ?>"><?= $contact['email'] ?></a></div></div>
      <div class="cl"><i class="fa-brands fa-whatsapp"></i><div><small>WhatsApp</small><a href="https://wa.me/<?= $contact['wa'] ?>" target="_blank"><?= $contact['phone'] ?></a><br><a href="https://wa.me/<?= $contact['wa2'] ?>" target="_blank"><?= $contact['phone2'] ?></a></div></div>
      <div class="cl"><i class="fa-brands fa-telegram"></i><div><small>Telegram</small><a href="https://t.me/<?= $contact['tg'] ?>" target="_blank">@<?= $contact['tg'] ?></a></div></div>
      <div class="cl"><i class="fa-brands fa-instagram"></i><div><small>Instagram</small><a href="https://instagram.com/<?= $contact['ig'] ?>" target="_blank">@<?= $contact['ig'] ?></a></div></div>
      <div class="cl"><i class="fa-brands fa-tiktok"></i><div><small>TikTok</small><a href="https://tiktok.com/@<?= $contact['tt'] ?>" target="_blank">@<?= $contact['tt'] ?></a></div></div>
      <div class="cl"><i class="fa-solid fa-location-dot"></i><div><small>Location</small><?= $contact['loc'] ?></div></div>
      <div class="social" style="margin-top:26px">
        <a href="mailto:<?= $contact['email'] ?>" title="Gmail"><i class="fa-solid fa-envelope"></i></a>
        <a href="https://wa.me/<?= $contact['wa'] ?>" target="_blank" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="https://t.me/<?= $contact['tg'] ?>" target="_blank" title="Telegram"><i class="fa-brands fa-telegram"></i></a>
        <a href="https://instagram.com/<?= $contact['ig'] ?>" target="_blank" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://tiktok.com/@<?= $contact['tt'] ?>" target="_blank" title="TikTok"><i class="fa-brands fa-tiktok"></i></a>
      </div>
    </div>
    <div class="card" style="transform:none">
      <?php if ($status === 'ok'): ?><div class="msg ok">Message sent. We will reply within one business day.</div>
      <?php elseif ($status === 'err'): ?><div class="msg err">Enter your name, a valid email and a message of at least 10 characters.</div><?php endif; ?>
      <form method="post" action="https://formsubmit.co/<?= $contact['form_email'] ?>">
        <input type="hidden" name="_subject" value="New message from the WaheemTech website">
        <input type="hidden" name="_next" value="<?= htmlspecialchars($next) ?>">
        <input type="hidden" name="_captcha" value="false">
        <input type="hidden" name="_template" value="table">
        <input type="text" name="_honey" style="display:none" tabindex="-1" autocomplete="off">
        <label>Full name<input name="name" required value="<?= htmlspecialchars($v['name']) ?>"></label>
        <label>Email address<input type="email" name="email" required value="<?= htmlspecialchars($v['email']) ?>"></label>
        <label>Subject<select name="subject">
          <?php foreach (['Project','Training','Store purchase','Partnership','Other'] as $o): ?>
            <option <?= $v['subject'] === $o ? 'selected' : '' ?>><?= $o ?></option><?php endforeach; ?></select></label>
        <label>Message<textarea name="message" rows="5" required><?= htmlspecialchars($v['message']) ?></textarea></label>
        <button class="btn" type="submit">Send message</button>
      </form>
    </div>
  </div>
</div></section>

<?php else: ?>
<!-- ===== HOME PAGE ===== -->
<section class="hero"><div class="wrap">
  <h1>We engineer Deep-Tech and Fintech for Africa.</h1>
  <p>WaheemTech is a five-person Nigerian team building embedded systems, AI, secure software and fintech products for individuals, startups and enterprises.</p>
  <a class="btn" href="#portfolio">See our work</a><a class="btn ghost" href="index.php?page=contact">Start a project</a>
  <p class="mono" style="font-size:.85rem;margin-top:26px"><?= implode(' . ', $tagline) ?></p>
  <div class="stats">
    <div><b data-n="5">0</b><span>Specialists</span></div><div><b data-n="10" data-s="+">0</b><span>Projects delivered</span></div>
    <div><b data-n="10">0</b><span>Core services</span></div><div><b data-n="6">0</b><span>Training tracks</span></div><div><b data-n="3" data-s="+">0</b><span>Years building</span></div>
  </div>
</div></section>

<section class="acc"><div class="wrap">
  <span class="pill">✔ REGISTERED & ACCREDITED</span>
  <h3>TRUSTED, REGISTERED & PARTNERED WITH</h3>
  <div class="plist">
    <?php foreach ($partners as $p): ?>
      <div class="pt"><div class="pb" style="--pc:<?= $p[2] ?>"><i class="<?= $p[1] ?>"></i><?= $p[0] ?></div><small><?= $p[3] ?></small></div>
    <?php endforeach; ?>
  </div>
  <h3 class="mono" style="color:var(--m);font-size:.85rem;letter-spacing:.2em;margin:44px 0 22px">IN COLLABORATION WITH</h3>
  <div class="plist"><?php foreach ($collabs as $c): ?><div class="pt"><div class="pb" style="--pc:var(--c)"><?= $c ?></div></div><?php endforeach; ?></div>
</div></section>

<section class="sec" id="about"><div class="wrap">
  <h2>About Us</h2>
  <p class="lead">WaheemTech is a Nigerian technology brand working where Deep-Tech meets Fintech. We build scalable solutions in embedded systems, AI/ML, cybersecurity, software, blockchain/DeFi, digital lending and fintech SaaS. Founded and led by Muhammad Muhammad Sarkin Bariki.</p>
  <div class="g g2 mv">
    <div class="card"><b>Mission</b><p>To engineer transformative Deep-Tech and Fintech solutions that solve real-world challenges, drive financial inclusion, and position Africa as a global technology hub.</p></div>
    <div class="card"><b>Vision</b><p>To become Africa's most trusted and innovative technology brand, where cutting-edge science meets bold entrepreneurship.</p></div>
    <div class="card"><b>Reach</b><p>Nigeria first, Africa wide, globally ambitious. We serve West African tech and fintech ecosystems, with paths into East Africa, Europe and global Web3 markets.</p></div>
    <div class="card"><b>Values</b><p>Innovation without limits. Integrity in every line of code. Collaboration over competition. Inclusion and diversity. Excellence as a standard. Accountability and transparency.</p></div>
  </div>
</div></section>

<section class="sec alt" id="services"><div class="wrap">
  <h2>Our Core Services</h2>
  <p class="lead">Professional services from a single device to a full fintech platform: we design, build, secure and market it.</p>
  <div class="g g3">
    <?php foreach ($services as $s): ?>
      <div class="card"><div class="ico"><?= $s[0] ?></div><h3><?= $s[1] ?></h3><p><?= $s[2] ?></p>
        <a class="btn sm enr" href="<?= wa($s[3]) ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> Enroll now</a></div>
    <?php endforeach; ?>
  </div>
  <div class="card" style="margin-top:34px"><h3>🎯 Our Vision</h3><p>To be a trusted technology partner delivering secure, smart and scalable solutions that drive growth, efficiency and digital transformation for businesses and individuals worldwide.</p></div>
  <div class="train">
    <h3>🎓 Technology Skills Training & Professional Education</h3>
    <p style="color:var(--m)">Our vision for learning: to empower learners with in-demand tech skills, practical knowledge and real-world experience to unlock their potential and excel in the digital economy.</p>
    <div class="g g3" style="margin-top:24px">
      <?php foreach ($training as $t): ?>
        <div class="card"><h3><?= $t[0] ?></h3><p><?= $t[1] ?></p>
          <a class="btn sm enr" href="<?= wa($t[2]) ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> Enroll now</a></div>
      <?php endforeach; ?>
    </div>
  </div>
</div></section>

<section class="sec" id="team"><div class="wrap">
  <h2>Meet the Team</h2>
  <p class="lead">Five specialists covering engineering, security, data, marketing and brand.</p>
  <div class="g g3">
    <?php foreach ($team as $m): $photo = img('assets/img/team/' . $m['photo'] );
      $ini = implode('', array_map(fn($w) => $w[0], array_slice(explode(' ', $m['name']), 0, 2))); ?>
      <div class="card tm">
        <div class="ph"><?php if ($photo): ?><img src="<?= $photo ?>" alt="<?= $m['name'] ?>"><?php else: ?><?= $ini ?><?php endif; ?></div>
        <h3><?= $m['name'] ?></h3><div class="role"><?= $m['role'] ?></div>
        <p><?= $m['bio'] ?></p>
        <ul><?php foreach ($m['does'] as $d): ?><li><?= $d ?></li><?php endforeach; ?></ul>
        <?php if (!$photo && $showHints): ?><small class="hint">Add photo: assets/img/team/<?= $m['photo'] ?>.jpg</small><?php endif; ?><br>
        <a class="li" href="<?= $m['linkedin'] ?>" target="_blank" rel="noopener" title="<?= $m['name'] ?> on LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
      </div>
    <?php endforeach; ?>
  </div>

  <h2 style="margin-top:80px">Organisation Chart</h2>
  <p class="lead">Who reports to whom at WaheemTech.</p>
  <div class="org">
    <div class="on ceo"><b><?= $team[0]['name'] ?></b><small><?= $team[0]['short'] ?></small></div>
    <div class="orow">
      <div class="ocol"><div class="on cto"><b><?= $team[1]['name'] ?></b><small><?= $team[1]['short'] ?></small></div>
        <div class="on sub"><b><?= $team[2]['name'] ?></b><small><?= $team[2]['short'] ?></small></div></div>
      <div class="ocol"><div class="on"><b><?= $team[3]['name'] ?></b><small><?= $team[3]['short'] ?></small></div></div>
      <div class="ocol"><div class="on"><b><?= $team[4]['name'] ?></b><small><?= $team[4]['short'] ?></small></div></div>
    </div>
  </div>
  <div class="leg"><span><i style="background:var(--c)"></i>Executive</span><span><i style="background:var(--v)"></i>Technology & creative</span><span><i style="background:var(--line)"></i>Engineering, consulting, communications</span></div>
</div></section>

<section class="sec alt" id="portfolio"><div class="wrap">
  <h2>Portfolio</h2>
  <p class="lead">A selection of ten projects across IoT, fintech, security, AI and marketing.</p>
  <div class="g g3">
    <?php foreach ($projects as $i => $p): $im = img('assets/img/projects/p' . ($i + 1) ); ?>
      <div class="card">
        <div class="th" style="--h:<?= $p[3] ?>"><?php if ($im): ?><img src="<?= $im ?>" alt="<?= $p[0] ?> demo"><?php else: ?><?= $showHints ? 'Add: assets/img/projects/p' . ($i + 1) . '.jpg' : 'Demo preview' ?><?php endif; ?></div>
        <span class="tag"><?= $p[2] ?></span><h3><?= $p[0] ?></h3><p><?= $p[1] ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</div></section>

<section class="sec" id="store"><div class="wrap">
  <h2>Store</h2>
  <p class="lead">Finished projects ready to buy, customise and launch. Message us on WhatsApp to order.</p>
  <div class="g g3">
    <?php foreach ($store as $i => $s): $im = img('assets/img/store/s' . ($i + 1) );
      $wa = 'https://wa.me/' . $contact['wa'] . '?text=' . urlencode('Hello WaheemTech, I want to buy: ' . $s[0]); ?>
      <div class="card">
        <div class="th" style="--h:<?= $s[4] ?>"><?php if ($im): ?><img src="<?= $im ?>" alt="<?= $s[0] ?>"><?php else: ?><?= $showHints ? 'Add: assets/img/store/s' . ($i + 1) . '.jpg' : 'Product preview' ?><?php endif; ?></div>
        <span class="tag"><?= $s[3] ?></span><h3><?= $s[0] ?></h3><p><?= $s[1] ?></p>
        <div class="price"><b><?= $s[2] ?></b><a class="btn sm" href="<?= $wa ?>" target="_blank" rel="noopener">Buy now</a></div>
      </div>
    <?php endforeach; ?>
  </div>
</div></section>

<section class="sec cta"><div class="wrap">
  <h2>Have a project in mind?</h2><p class="lead" style="margin-inline:auto">Tell us what you need and we will reply with a plan and a quote.</p>
  <a class="btn" href="index.php?page=contact">Contact Us</a>
</div></section>

<?php endif; ?>

<footer class="foot">
  <div class="wrap fgrid">
    <div><a class="brand" href="index.php"><span class="logo">WT</span><span>waheem-team</span></a>
      <p>WaheemTech builds Deep-Tech and Fintech solutions for Africa and beyond.</p><p class="mono" style="font-size:.8rem"><?= implode(' . ', $tagline) ?></p></div>
    <div><h4>Explore</h4><a href="index.php#about">About Us</a><a href="index.php#services">Services</a><a href="index.php#team">Team</a><a href="index.php#portfolio">Portfolio</a><a href="index.php#store">Store</a></div>
    <div><h4>Connect</h4>
      <div class="social">
        <a href="mailto:<?= $contact['email'] ?>" title="Gmail"><i class="fa-solid fa-envelope"></i></a>
        <a href="https://wa.me/<?= $contact['wa'] ?>" target="_blank" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="https://t.me/<?= $contact['tg'] ?>" target="_blank" title="Telegram"><i class="fa-brands fa-telegram"></i></a>
        <a href="https://instagram.com/<?= $contact['ig'] ?>" target="_blank" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://tiktok.com/@<?= $contact['tt'] ?>" target="_blank" title="TikTok"><i class="fa-brands fa-tiktok"></i></a>
      </div></div>
  </div>
  <p class="copy">© <?= date('Y') ?> WaheemTech | Deep-Tech & Fintech. All rights reserved.</p>
</footer>
<script src="main.js"></script>
</body></html>
