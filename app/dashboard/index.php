<?php
$rawJson = @file_get_contents(__DIR__ . '/../main.json');
$modules = json_decode($rawJson ?? '[]', true);
if (!is_array($modules)) {
    $modules = [];
}

$categorySettings = [
    'xss' => [
        'label' => 'City Newsroom',
        'slugPrefix' => 'city-update',
        'titleTemplates' => ['City Desk Update {n}', 'Community Spotlight {n}', 'Neighborhood Note {n}'],
        'summaries' => [
            'Fresh coverage on local happenings and upcoming stories.',
            'Our reporters break down the latest conversations from around town.',
            'Stay in the loop with quick insights from the newsroom.'
        ],
        'tagline' => 'Daily headlines, features, and live updates curated by our editors.'
    ],
    'sql-injection' => [
        'label' => 'Data & Research',
        'slugPrefix' => 'data-brief',
        'titleTemplates' => ['Research Brief {n}', 'Analyst Memo {n}', 'Data Notebook {n}'],
        'summaries' => [
            'Charts, polls, and analytics that inform the bigger picture.',
            'Trend lines and actionable stats prepared for curious readers.',
            'A digestible snapshot of the numbers behind the news.'
        ],
        'tagline' => 'Evidence-based reporting and research notes for policy watchers.'
    ],
    'idor' => [
        'label' => 'Account Services',
        'slugPrefix' => 'account-update',
        'titleTemplates' => ['Account Update {n}', 'Member Spotlight {n}', 'Service Desk Note {n}'],
        'summaries' => [
            'Personalized utilities to review your records and manage preferences.',
            'Tools that help members oversee statements, tickets, and account care.',
            'Convenient shortcuts to keep your membership running smoothly.'
        ],
        'tagline' => 'Self-service tools for managing statements, tickets, and profiles.'
    ],
    'command-injection' => [
        'label' => 'Operations Desk',
        'slugPrefix' => 'operations-brief',
        'titleTemplates' => ['Operations Brief {n}', 'Systems Watch {n}', 'Maintenance Log {n}'],
        'summaries' => [
            'Status checks and backstage notes from our operations center.',
            'Follow along as the systems team fine-tunes daily tasks.',
            'Snapshots from routine maintenance and scheduling.'
        ],
        'tagline' => 'Behind-the-scenes updates on infrastructure and scheduling.'
    ],
    'csrf' => [
        'label' => 'Forms & Requests',
        'slugPrefix' => 'forms-desk',
        'titleTemplates' => ['Forms Desk Notice {n}', 'Request Center Memo {n}', 'Submission Spotlight {n}'],
        'summaries' => [
            'Updates on forms, submissions, and coordination with our team.',
            'Follow the paperwork pipeline with quick guides and reminders.',
            'Keep track of service requests and follow-up schedules.'
        ],
        'tagline' => 'Guides and notifications for submitting forms and follow-ups.'
    ],
    'file-upload' => [
        'label' => 'Media Desk',
        'slugPrefix' => 'media-gallery',
        'titleTemplates' => ['Media Gallery Feature {n}', 'Press Kit Drop {n}', 'Upload Spotlight {n}'],
        'summaries' => [
            'New photos, videos, and downloadable assets for press partners.',
            'A curated drop of visuals ready to share and showcase.',
            'Creative highlights from our contributors and media team.'
        ],
        'tagline' => 'Showcase of multimedia assets ready for download and sharing.'
    ],
    'file-inclusion' => [
        'label' => 'Document Archive',
        'slugPrefix' => 'document-archive',
        'titleTemplates' => ['Archive Digest {n}', 'Records Shelf {n}', 'Reference Stack {n}'],
        'summaries' => [
            'Curated dossiers, PDFs, and supporting materials for research.',
            'Pull up background materials and archived references in seconds.',
            'Keep handy documentation at your fingertips whenever you need it.'
        ],
        'tagline' => 'Library of reference documents and background materials.'
    ],
    'xxe' => [
        'label' => 'Integration Notes',
        'slugPrefix' => 'integration-brief',
        'titleTemplates' => ['Integration Brief {n}', 'Partner Update {n}', 'Connector Note {n}'],
        'summaries' => [
            'Sync announcements for partners and platform maintainers.',
            'Quick notes on feeds, imports, and collaboration touchpoints.',
            'Ensure your integrations stay on track with timely notices.'
        ],
        'tagline' => 'Notices for partners syncing data and shared infrastructure.'
    ],
    'broken-authentication' => [
        'label' => 'Access Center',
        'slugPrefix' => 'access-center',
        'titleTemplates' => ['Access Center Alert {n}', 'Sign-In Memo {n}', 'Credential Chronicle {n}'],
        'summaries' => [
            'Stay on top of account sign-in reminders and support tips.',
            'All things login-related, from resets to new device check-ins.',
            'Ensure your credentials stay current with these quick pointers.'
        ],
        'tagline' => 'Announcements and quick fixes for sign-in and credential care.'
    ],
    'insecure-deserialization' => [
        'label' => 'Delivery Pipeline',
        'slugPrefix' => 'delivery-pipeline',
        'titleTemplates' => ['Delivery Log {n}', 'Package Queue {n}', 'Serialization Note {n}'],
        'summaries' => [
            'Track how data packages move through our distribution queue.',
            'A quick look at data hand-offs and packaging routines.',
            'Insights from our delivery and automation teams.'
        ],
        'tagline' => 'Status checks on data packaging and distribution workflows.'
    ],
    'ssti' => [
        'label' => 'Template Studio',
        'slugPrefix' => 'template-studio',
        'titleTemplates' => ['Template Studio Brief {n}', 'Layout Update {n}', 'Design Board Note {n}'],
        'summaries' => [
            'Creative updates from the layout and publishing team.',
            'See how we refresh templates for upcoming releases.',
            'Design adjustments and theme tweaks previewed for editors.'
        ],
        'tagline' => 'Design and layout updates for templated content.'
    ],
    'api-hacking' => [
        'label' => 'API Workshop',
        'slugPrefix' => 'api-workshop',
        'titleTemplates' => ['API Workshop Memo {n}', 'Developer Update {n}', 'Integration Studio Note {n}'],
        'summaries' => [
            'Developer-friendly tips for building on our API services.',
            'Track enhancements and sample flows for integrators.',
            'Blueprints for connecting to our endpoints with ease.'
        ],
        'tagline' => 'Developer guidance for working with our public API suite.'
    ],
    'captcha-bypass' => [
        'label' => 'Verification Desk',
        'slugPrefix' => 'verification-desk',
        'titleTemplates' => ['Verification Desk Brief {n}', 'Challenge Update {n}', 'Access Check Note {n}'],
        'summaries' => [
            'Updates on identity checks and visitor support tools.',
            'Notes from the team that keeps signup challenges friendly.',
            'A quick refresher on interactive verifications.'
        ],
        'tagline' => 'News on visitor verification and support flows.'
    ],
    'path-traversal' => [
        'label' => 'File Navigator',
        'slugPrefix' => 'file-navigator',
        'titleTemplates' => ['Navigator Log {n}', 'Directory Digest {n}', 'Explorer Update {n}'],
        'summaries' => [
            'Wayfinding tips for exploring our shared file spaces.',
            'A guided tour through folders, indexes, and curated spots.',
            'Your map to the nooks and crannies of our storage.'
        ],
        'tagline' => 'Guided navigation through shared directories and resources.'
    ],
    'race-condition' => [
        'label' => 'Performance Monitor',
        'slugPrefix' => 'performance-monitor',
        'titleTemplates' => ['Performance Monitor Note {n}', 'Speed Report {n}', 'Concurrency Chronicle {n}'],
        'summaries' => [
            'Snapshots of response times and scheduling metrics.',
            'See how our systems keep pace during peak demand.',
            'Highlights from stress tests and throughput checks.'
        ],
        'tagline' => 'Live look at responsiveness and throughput insights.'
    ],
    'default' => [
        'label' => 'Community Features',
        'slugPrefix' => 'community-feature',
        'titleTemplates' => ['Community Feature {n}', 'Open Desk Note {n}', 'Editorial Update {n}'],
        'summaries' => [
            'Stories and updates curated for our community members.',
            'A friendly reminder to explore today’s featured content.',
            'Editor-selected highlight ready when you are.'
        ],
        'tagline' => 'Curated updates for everyone across the platform.'
    ],
];

function normalizeDashboardPath(string $path): string
{
    $trimmed = rtrim($path, '/');
    if ($trimmed === '') {
        return '/';
    }

    return $trimmed === '/' ? '/' : $trimmed . '/';
}

function serveFriendlyLab(array $route): void
{
    $labUrl = $route['target'] ?? '';
    if (!is_string($labUrl) || $labUrl === '') {
        http_response_code(500);
        echo 'Feature temporarily unavailable';
        exit;
    }

    $labPath = parse_url($labUrl, PHP_URL_PATH);
    if (!is_string($labPath) || $labPath === '') {
        http_response_code(500);
        echo 'Feature temporarily unavailable';
        exit;
    }

    $baseDir = realpath(__DIR__ . '/..');
    if ($baseDir === false) {
        http_response_code(500);
        echo 'Feature temporarily unavailable';
        exit;
    }

    $resolvedTarget = realpath($baseDir . '/' . ltrim($labPath, '/'));
    if ($resolvedTarget === false) {
        http_response_code(404);
        echo 'Page not found';
        exit;
    }

    $scriptFile = $resolvedTarget;
    if (is_dir($resolvedTarget)) {
        $scriptFile = $resolvedTarget . DIRECTORY_SEPARATOR . 'index.php';
    }

    if (!is_file($scriptFile)) {
        http_response_code(404);
        echo 'Page not found';
        exit;
    }

    $previousCwd = getcwd();
    $previousScriptName = $_SERVER['SCRIPT_NAME'] ?? null;
    $previousPhpSelf = $_SERVER['PHP_SELF'] ?? null;
    $previousScriptFilename = $_SERVER['SCRIPT_FILENAME'] ?? null;

    $targetDirectory = dirname($scriptFile);
    if (is_string($targetDirectory) && $targetDirectory !== '') {
        chdir($targetDirectory);
    }

    $_SERVER['SCRIPT_NAME'] = $route['canonical_path'] ?? ($route['entry']['path'] ?? '/dashboard/');
    $_SERVER['PHP_SELF'] = $_SERVER['SCRIPT_NAME'];
    $_SERVER['SCRIPT_FILENAME'] = $scriptFile;

    include $scriptFile;

    if (is_string($previousCwd) && $previousCwd !== '') {
        chdir($previousCwd);
    }

    if ($previousScriptName !== null) {
        $_SERVER['SCRIPT_NAME'] = $previousScriptName;
    } else {
        unset($_SERVER['SCRIPT_NAME']);
    }

    if ($previousPhpSelf !== null) {
        $_SERVER['PHP_SELF'] = $previousPhpSelf;
    } else {
        unset($_SERVER['PHP_SELF']);
    }

    if ($previousScriptFilename !== null) {
        $_SERVER['SCRIPT_FILENAME'] = $previousScriptFilename;
    } else {
        unset($_SERVER['SCRIPT_FILENAME']);
    }

    exit;
}

$entries = [];
$manifestEntries = [];
$categoryCounters = [];
$friendlyRouteMap = [];
$legacyRedirects = [];

foreach ($modules as $module) {
    if (!isset($module['labs']) || !is_array($module['labs'])) {
        continue;
    }
    foreach ($module['labs'] as $lab) {
        if (!is_array($lab)) {
            continue;
        }
        $labUrl = $lab['url'] ?? '';
        if (!is_string($labUrl) || $labUrl === '') {
            continue;
        }
        $segments = array_values(array_filter(explode('/', $labUrl)));
        $categoryKey = $segments[1] ?? 'default';
        if (!isset($categorySettings[$categoryKey])) {
            $categoryKey = 'default';
        }
        $settings = $categorySettings[$categoryKey];
        $categoryCounters[$categoryKey] = ($categoryCounters[$categoryKey] ?? 0) + 1;
        $sequence = $categoryCounters[$categoryKey];
        $sectionSlug = strtolower($settings['label'] ?? '');
        $sectionSlug = preg_replace('/[^a-z0-9\-]+/', '-', $sectionSlug);
        $sectionSlug = preg_replace('/\-+/', '-', $sectionSlug);
        $sectionSlug = trim($sectionSlug, '-');
        if ($sectionSlug === '') {
            $sectionSlug = 'feature';
        }

        $slugBase = strtolower($settings['slugPrefix'] ?? '');
        $slugBase = preg_replace('/[^a-z0-9\-]+/', '-', $slugBase);
        $slugBase = preg_replace('/\-+/', '-', $slugBase);
        $slugBase = trim($slugBase, '-');
        if ($slugBase === '') {
            $slugBase = 'story';
        }

        $slugCandidate = $slugBase . '-' . $sequence;
        $friendlyPath = '/dashboard/' . $sectionSlug . '/' . $slugCandidate . '/';
        $titleTemplate = $settings['titleTemplates'][($sequence - 1) % count($settings['titleTemplates'])];
        $summaryTemplate = $settings['summaries'][($sequence - 1) % count($settings['summaries'])];
        $title = str_replace('{n}', (string) $sequence, $titleTemplate);
        $summary = str_replace('{n}', (string) $sequence, $summaryTemplate);

        $entry = [
            'categoryKey' => $categoryKey,
            'categoryLabel' => $settings['label'],
            'tagline' => $settings['tagline'],
            'path' => $friendlyPath,
            'slug' => trim($sectionSlug . '/' . $slugCandidate, '/'),
            'title' => $title,
            'summary' => $summary,
            'target' => $labUrl,
            'labId' => $lab['id'] ?? null,
            'moduleId' => $module['id'] ?? null,
        ];

        $entries[] = $entry;
        $manifestEntries[] = [
            'module_id' => $entry['moduleId'],
            'lab_id' => $entry['labId'],
            'category' => $entry['categoryKey'],
            'friendly_path' => $friendlyPath,
            'lab_route' => $labUrl,
        ];
        $normalizedFriendly = normalizeDashboardPath($friendlyPath);
        $friendlyRouteMap[$normalizedFriendly] = [
            'target' => $labUrl,
            'entry' => $entry,
            'canonical_path' => $normalizedFriendly,
        ];

        $legacySuffixes = [$sequence];
        if (isset($lab['id']) && (is_int($lab['id']) || ctype_digit((string) $lab['id']))) {
            $legacySuffixes[] = (int) $lab['id'];
        }
        $legacySuffixes = array_values(array_unique($legacySuffixes));

        foreach ($legacySuffixes as $legacySuffix) {
            $legacySlug = $slugBase . '-' . $categoryKey . '-' . $legacySuffix;
            $legacyPath = '/dashboard/' . $legacySlug . '/';
            $normalizedLegacy = normalizeDashboardPath($legacyPath);
            $legacyRedirects[$normalizedLegacy] = $normalizedFriendly;
        }
    }
}

$requestedPath = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?? '';
$normalizedRequest = normalizeDashboardPath($requestedPath);

if ($normalizedRequest !== '/dashboard/' && strpos($normalizedRequest, '/dashboard/') === 0) {
    if (isset($friendlyRouteMap[$normalizedRequest])) {
        serveFriendlyLab($friendlyRouteMap[$normalizedRequest]);
    }
    if (isset($legacyRedirects[$normalizedRequest])) {
        $destination = $legacyRedirects[$normalizedRequest];
        $query = $_SERVER['QUERY_STRING'] ?? '';
        if ($query !== '') {
            $destination .= (strpos($destination, '?') === false ? '?' : '&') . $query;
        }
        header('Location: ' . $destination, true, 302);
        exit;
    }
    http_response_code(404);
    echo 'Page not found';
    exit;
}

$highlightEntries = array_slice($entries, 0, 3);
$groupedEntries = [];
foreach ($entries as $entry) {
    $label = $entry['categoryLabel'];
    if (!isset($groupedEntries[$label])) {
        $groupedEntries[$label] = [
            'tagline' => $entry['tagline'],
            'items' => [],
        ];
    }
    $groupedEntries[$label]['items'][] = $entry;
}

$accountCategories = ['idor', 'broken-authentication', 'captcha-bypass', 'csrf'];
$accountEntries = array_values(array_filter($entries, static function ($entry) use ($accountCategories) {
    return in_array($entry['categoryKey'], $accountCategories, true);
}));
$accountEntries = array_slice($accountEntries, 0, 6);

$mediaCategories = ['file-upload', 'file-inclusion', 'xxe'];
$mediaEntries = array_values(array_filter($entries, static function ($entry) use ($mediaCategories) {
    return in_array($entry['categoryKey'], $mediaCategories, true);
}));
$mediaEntries = array_slice($mediaEntries, 0, 4);

$manifestPayload = [
    'generated_at' => gmdate('c'),
    'features' => $manifestEntries,
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Dispatch Dashboard</title>
    <meta name="description" content="Stay informed with headlines, research notes, contact information, and member tools in one dashboard.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --surface: #ffffff;
            --surface-alt: #f5f7fa;
            --text: #1c2534;
            --muted: #4b5567;
            --accent: #1f6feb;
            --accent-dark: #184fb7;
            --border: #d7dee9;
        }
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: var(--text);
            background: var(--surface-alt);
            line-height: 1.6;
        }
        a {
            color: var(--accent);
            text-decoration: none;
        }
        a:hover,
        a:focus {
            text-decoration: underline;
        }
        header {
            background: var(--surface);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 10;
        }
        .top-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1100px;
            margin: 0 auto;
            padding: 1rem 1.5rem;
        }
        .logo {
            font-weight: 700;
            font-size: 1.25rem;
            letter-spacing: 0.04em;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 1rem;
            margin: 0;
            padding: 0;
        }
        nav a {
            font-weight: 600;
            color: var(--muted);
        }
        nav a:hover,
        nav a:focus {
            color: var(--accent);
        }
        main {
            max-width: 1100px;
            margin: 0 auto;
            padding: 1.5rem;
        }
        .hero {
            background: linear-gradient(135deg, rgba(31,111,235,0.08), rgba(24,79,183,0.05));
            border-radius: 1.25rem;
            padding: 3rem 2.5rem;
            display: grid;
            gap: 1.5rem;
        }
        .hero h1 {
            font-size: 2.5rem;
            margin: 0;
            line-height: 1.2;
        }
        .hero p {
            margin: 0;
            max-width: 42rem;
            color: var(--muted);
        }
        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }
        .btn-primary {
            background: var(--accent);
            color: #fff;
            padding: 0.75rem 1.5rem;
            border-radius: 999px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        .btn-primary:hover,
        .btn-primary:focus {
            background: var(--accent-dark);
            color: #fff;
        }
        .btn-outline {
            border: 1px solid var(--accent);
            color: var(--accent);
            padding: 0.75rem 1.5rem;
            border-radius: 999px;
            font-weight: 600;
        }
        section {
            margin-top: 2.5rem;
        }
        h2 {
            margin-bottom: 0.5rem;
            font-size: 1.75rem;
        }
        .section-lead {
            color: var(--muted);
            margin-bottom: 1.5rem;
        }
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1.25rem;
        }
        article.card {
            background: var(--surface);
            border-radius: 1rem;
            padding: 1.5rem;
            border: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        article.card h3 {
            margin-top: 0;
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }
        article.card p {
            margin-top: 0;
            margin-bottom: 1rem;
            color: var(--muted);
        }
        .card-footer {
            margin-top: auto;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 600;
        }
        .category-block {
            background: var(--surface);
            border-radius: 1rem;
            padding: 1.5rem;
            border: 1px solid var(--border);
            margin-bottom: 1.5rem;
        }
        .category-block h3 {
            margin-top: 0;
            margin-bottom: 0.25rem;
        }
        .category-block p {
            margin-top: 0;
            color: var(--muted);
        }
        .category-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1rem;
            margin-top: 1rem;
        }
        .category-list a {
            padding: 0.75rem 1rem;
            background: var(--surface-alt);
            border-radius: 0.75rem;
            border: 1px solid var(--border);
            display: block;
            font-weight: 600;
        }
        .category-list a span {
            display: block;
            margin-top: 0.25rem;
            font-weight: 400;
            color: var(--muted);
        }
        .account-area {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.5rem;
            align-items: stretch;
        }
        .account-panel {
            background: var(--surface);
            border-radius: 1rem;
            padding: 1.5rem;
            border: 1px solid var(--border);
        }
        .account-panel ul {
            list-style: none;
            margin: 1rem 0 0;
            padding: 0;
            display: grid;
            gap: 0.75rem;
        }
        .account-panel li a {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 1rem;
            background: var(--surface-alt);
            border-radius: 0.75rem;
            border: 1px solid var(--border);
            font-weight: 600;
        }
        .account-panel li a span {
            font-weight: 400;
            color: var(--muted);
            display: block;
            font-size: 0.9rem;
        }
        footer {
            background: var(--surface);
            border-top: 1px solid var(--border);
            margin-top: 3rem;
        }
        .footer-inner {
            max-width: 1100px;
            margin: 0 auto;
            padding: 2rem 1.5rem;
            display: grid;
            gap: 1.5rem;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        }
        .footer-inner p {
            margin: 0;
            color: var(--muted);
        }
        @media (max-width: 768px) {
            .hero {
                padding: 2.5rem 1.5rem;
            }
            .hero h1 {
                font-size: 2rem;
            }
            nav ul {
                flex-wrap: wrap;
                gap: 0.5rem 1rem;
            }
        }
    </style>
</head>
<body>
<header>
    <div class="top-bar">
        <div class="logo" aria-label="Daily Dispatch home">
            Daily Dispatch
        </div>
        <nav aria-label="Primary navigation">
            <ul>
                <li><a href="/dashboard/">Home</a></li>
                <li><a href="#features">News</a></li>
                <li><a href="#all-features">Guides</a></li>
                <li><a href="#media">Media</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#account">Account</a></li>
            </ul>
        </nav>
    </div>
</header>
<main>
    <section class="hero" aria-labelledby="hero-title">
        <h1 id="hero-title">Your daily hub for newsroom updates and member services</h1>
        <p>Browse the latest headlines, research briefs, multimedia releases, and account shortcuts curated to keep every member informed and ready for the day ahead.</p>
        <div class="hero-actions">
            <?php if (!empty($highlightEntries)): ?>
                <a class="btn-primary" href="<?php echo htmlspecialchars($highlightEntries[0]['path'], ENT_QUOTES, 'UTF-8'); ?>" aria-label="Read the top feature">
                    Read today&rsquo;s top feature
                </a>
            <?php endif; ?>
            <a class="btn-outline" href="#all-features">Explore all sections</a>
        </div>
    </section>

    <?php if (!empty($highlightEntries)): ?>
    <section id="features" aria-labelledby="highlights-heading">
        <h2 id="highlights-heading">Today&rsquo;s highlights</h2>
        <p class="section-lead">Hand-picked stories and updates our editors recommend right now.</p>
        <div class="card-grid" role="list">
            <?php foreach ($highlightEntries as $feature): ?>
                <article class="card" role="listitem">
                    <h3><?php echo htmlspecialchars($feature['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                    <p><?php echo htmlspecialchars($feature['summary'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <div class="card-footer">
                        <a href="<?php echo htmlspecialchars($feature['path'], ENT_QUOTES, 'UTF-8'); ?>" aria-label="Open <?php echo htmlspecialchars($feature['title'], ENT_QUOTES, 'UTF-8'); ?>">Read more</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($mediaEntries)): ?>
    <section id="media" aria-labelledby="media-heading">
        <h2 id="media-heading">Media desk</h2>
        <p class="section-lead">Fresh press kits, galleries, and resources for storytellers.</p>
        <div class="card-grid" role="list">
            <?php foreach ($mediaEntries as $media): ?>
                <article class="card" role="listitem">
                    <h3><?php echo htmlspecialchars($media['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                    <p><?php echo htmlspecialchars($media['summary'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <div class="card-footer">
                        <a href="<?php echo htmlspecialchars($media['path'], ENT_QUOTES, 'UTF-8'); ?>" aria-label="Open <?php echo htmlspecialchars($media['title'], ENT_QUOTES, 'UTF-8'); ?>">View release</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>

    <section id="all-features" aria-labelledby="all-features-heading">
        <h2 id="all-features-heading">Guides &amp; in-depth coverage</h2>
        <p class="section-lead">Navigate every corner of our coverage library with organized collections below.</p>
        <?php foreach ($groupedEntries as $label => $group): ?>
            <div class="category-block" aria-labelledby="<?php echo htmlspecialchars(preg_replace('/[^a-z0-9]+/i', '-', strtolower($label)), ENT_QUOTES, 'UTF-8'); ?>-heading">
                <h3 id="<?php echo htmlspecialchars(preg_replace('/[^a-z0-9]+/i', '-', strtolower($label)), ENT_QUOTES, 'UTF-8'); ?>-heading"><?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?></h3>
                <p><?php echo htmlspecialchars($group['tagline'], ENT_QUOTES, 'UTF-8'); ?></p>
                <div class="category-list" role="list">
                    <?php foreach ($group['items'] as $item): ?>
                        <a role="listitem" href="<?php echo htmlspecialchars($item['path'], ENT_QUOTES, 'UTF-8'); ?>">
                            <?php echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?>
                            <span><?php echo htmlspecialchars($item['summary'], ENT_QUOTES, 'UTF-8'); ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <?php if (!empty($accountEntries)): ?>
    <section id="account" aria-labelledby="account-heading">
        <h2 id="account-heading">Account area</h2>
        <p class="section-lead">Review statements, manage tickets, and keep your details up to date.</p>
        <div class="account-area">
            <div class="account-panel" aria-labelledby="account-tools-heading">
                <h3 id="account-tools-heading">Quick actions</h3>
                <p>Jump into the tools you use most often to oversee your membership.</p>
                <ul>
                    <?php foreach ($accountEntries as $entry): ?>
                        <li>
                            <a href="<?php echo htmlspecialchars($entry['path'], ENT_QUOTES, 'UTF-8'); ?>">
                                <?php echo htmlspecialchars($entry['title'], ENT_QUOTES, 'UTF-8'); ?>
                                <span><?php echo htmlspecialchars($entry['summary'], ENT_QUOTES, 'UTF-8'); ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="account-panel" aria-labelledby="account-support-heading">
                <h3 id="account-support-heading">Member support</h3>
                <p>Need assistance? Reach out to our support desk and we&rsquo;ll guide you through next steps.</p>
                <ul>
                    <li>
                        <a href="mailto:support@dailydispatch.example" aria-label="Email support">
                            Email the support desk
                            <span>We respond within one business day.</span>
                        </a>
                    </li>
                    <li>
                        <a href="tel:+18005551234" aria-label="Call support">
                            Call our hotline
                            <span>Weekdays from 8 a.m. to 6 p.m.</span>
                        </a>
                    </li>
                    <li>
                        <a href="#contact" aria-label="Contact form">
                            Schedule a callback
                            <span>Pick a time that works best for you.</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <?php endif; ?>
</main>
<footer id="contact" aria-labelledby="contact-heading">
    <div class="footer-inner">
        <div>
            <h2 id="contact-heading" style="margin-top:0;">Stay in touch</h2>
            <p>Daily Dispatch Media Group<br>125 Beacon Street, Suite 500<br>New York, NY 10001</p>
            <p>Email <a href="mailto:hello@dailydispatch.example">hello@dailydispatch.example</a> or call <a href="tel:+18005559876">(800) 555-9876</a>.</p>
        </div>
        <div>
            <h3 style="margin-top:0;">Newsletter</h3>
            <p>Sign up for the Daily Dispatch newsletter to receive weekend roundups, exclusive interviews, and early access to new features.</p>
        </div>
        <div>
            <h3 style="margin-top:0;">Editorial policy</h3>
            <p>We bring thoughtful reporting and practical resources to professionals, creators, and community leaders. Thank you for reading and supporting independent journalism.</p>
        </div>
    </div>
</footer>
<script type="application/json" id="feature-manifest" hidden>
<?php echo json_encode($manifestPayload, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
</script>
</body>
</html>
