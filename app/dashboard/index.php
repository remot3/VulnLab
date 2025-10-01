<?php

$siteTitle = 'Daily Dispatch Dashboard';

$sections = [
    'newsroom' => [
        'title' => 'City Newsroom',
        'path' => '/dashboard/newsroom/',
        'tagline' => 'Local reporting hub with live bulletins and community spotlights.',
        'intro' => 'Follow real-time coverage, newsroom experiments, and curated takes from our city desk team.',
        'features' => [
            [
                'path' => '/dashboard/city-newsroom/city-update-1/',
                'target' => 'http://localhost:1337/lab/xss/basic-reflected/',
                'title' => 'Morning City Briefing',
                'summary' => 'Kick off the day with overnight developments from traffic flow to city hall updates.',
            ],
            [
                'path' => '/dashboard/city-newsroom/city-update-2/',
                'target' => 'http://localhost:1337/lab/xss/basic-stored/',
                'title' => 'Weekend Feature Pitch Board',
                'summary' => 'Browse upcoming long-form features and share quick feedback with the editorial team.',
            ],
            [
                'path' => '/dashboard/city-newsroom/city-update-3/',
                'target' => 'http://localhost:1337/lab/xss/basic-dom-based/',
                'title' => 'Community Voices Roundup',
                'summary' => 'See highlights from neighborhood correspondents, letters, and civic forums.',
            ],
            [
                'path' => '/dashboard/city-newsroom/city-update-4/',
                'target' => 'http://localhost:1337/lab/xss/html-attribute-manipulation/',
                'title' => 'City Services Watch',
                'summary' => 'Track maintenance, utility work, and service advisories arriving throughout the day.',
            ],
            [
                'path' => '/dashboard/city-newsroom/city-update-6/',
                'target' => 'http://localhost:1337/lab/xss/user-agent/',
                'title' => 'Device Channel Update',
                'summary' => 'Personalize alerts for mobile, kiosk, and voice briefings tied to your profile.',
            ],
            [
                'path' => '/dashboard/city-newsroom/city-update-7/',
                'target' => 'http://localhost:1337/lab/xss/news/',
                'title' => 'Evening Edition Live',
                'summary' => 'Follow our rolling live blog as the newsroom pushes late-breaking stories.',
            ],
        ],
    ],
    'gallery' => [
        'title' => 'Media Gallery',
        'path' => '/dashboard/gallery/',
        'tagline' => 'Photo essays, press kits, and multimedia drops ready for partners.',
        'intro' => 'Explore curated visuals, upload new field assets, and coordinate approvals with editors.',
        'features' => [
            [
                'path' => '/dashboard/city-newsroom/city-update-5/',
                'target' => 'http://localhost:1337/lab/xss/our-gallery/',
                'title' => 'Neighborhood Photo Gallery',
                'summary' => 'Flip through fresh photo sets contributed by community photographers.',
            ],
            [
                'path' => '/dashboard/city-newsroom/city-update-8/',
                'target' => 'http://localhost:1337/lab/xss/image-upload/',
                'title' => 'Field Upload Drop',
                'summary' => 'Send in mobile snapshots and breaking visuals directly to the media desk.',
            ],
            [
                'path' => '/dashboard/media-desk/media-gallery-1/',
                'target' => 'http://localhost:1337/lab/file-upload/unrestricted/',
                'title' => 'Media Kit Intake',
                'summary' => 'Submit campaign artwork and downloadable kits for upcoming announcements.',
            ],
            [
                'path' => '/dashboard/media-desk/media-gallery-2/',
                'target' => 'http://localhost:1337/lab/file-upload/mime-type/',
                'title' => 'Press Asset Review',
                'summary' => 'Check submissions for resolution, captions, and distribution-ready formats.',
            ],
            [
                'path' => '/dashboard/media-desk/media-gallery-3/',
                'target' => 'http://localhost:1337/lab/file-upload/magic-header/',
                'title' => 'Archive Quality Check',
                'summary' => 'Verify archived imagery and refresh metadata for evergreen pieces.',
            ],
            [
                'path' => '/dashboard/media-desk/media-gallery-4/',
                'target' => 'http://localhost:1337/lab/file-upload/blacklist-1/',
                'title' => 'Brand Toolkit Drop Box',
                'summary' => 'Share new logos, typography updates, and branded templates for review.',
            ],
            [
                'path' => '/dashboard/media-desk/media-gallery-5/',
                'target' => 'http://localhost:1337/lab/file-upload/blacklist-2/',
                'title' => 'Contributor Upload Review',
                'summary' => 'Work through contributor submissions awaiting approval and attribution.',
            ],
        ],
    ],
    'research' => [
        'title' => 'Research Desk',
        'path' => '/dashboard/research/',
        'tagline' => 'Deep dives into metrics, response data, and campaign performance.',
        'intro' => 'Inspect dashboards that surface account trends, response rates, and policy data for editors.',
        'features' => [
            [
                'path' => '/dashboard/data-research/data-brief-2/',
                'target' => 'http://localhost:1337/lab/sql-injection/find-password/',
                'title' => 'Account Recovery Audit',
                'summary' => 'Analyze support flows to spot unusual reset patterns across services.',
            ],
            [
                'path' => '/dashboard/data-research/data-brief-3/',
                'target' => 'http://localhost:1337/lab/sql-injection/post-blind-boolean/',
                'title' => 'Campaign Response Tracker',
                'summary' => 'Compare audience reactions to recent pushes and schedule follow-ups.',
            ],
            [
                'path' => '/dashboard/data-research/data-brief-4/',
                'target' => 'http://localhost:1337/lab/sql-injection/get-blind-error/',
                'title' => 'Pressroom Analytics Console',
                'summary' => 'Monitor newsroom tooling status, content tags, and publication success rates.',
            ],
            [
                'path' => '/dashboard/data-research/data-brief-5/',
                'target' => 'http://localhost:1337/lab/sql-injection/post-blind-time/',
                'title' => 'Wait Time Trendline',
                'summary' => 'Review processing delays across data pipelines and coordinate optimizations.',
            ],
        ],
    ],
    'profile' => [
        'title' => 'Profile & Access',
        'path' => '/dashboard/profile/',
        'tagline' => 'Keep member identities, bios, and sign-in experiences polished.',
        'intro' => 'Review member-facing tools for profile edits, login support, and audience interaction preferences.',
        'features' => [
            [
                'path' => '/dashboard/data-research/data-brief-1/',
                'target' => 'http://localhost:1337/lab/sql-injection/post-login/',
                'title' => 'Sign-In Activity Monitor',
                'summary' => 'Check live authentication stats to anticipate help desk needs.',
            ],
            [
                'path' => '/dashboard/account-services/account-update-3/',
                'target' => 'http://localhost:1337/lab/idor/changing-password/',
                'title' => 'Password Care Center',
                'summary' => 'Guide members through credential refreshes and recovery support.',
            ],
            [
                'path' => '/dashboard/account-services/account-update-5/',
                'target' => 'http://localhost:1337/lab/idor/address-entry/',
                'title' => 'Address Book Editor',
                'summary' => 'Update mailing details and ensure profiles stay in sync with print routes.',
            ],
            [
                'path' => '/dashboard/account-services/account-update-6/',
                'target' => 'http://localhost:1337/lab/idor/about/',
                'title' => 'Member Bio Preview',
                'summary' => 'Polish the public blurb that appears on contributor and volunteer listings.',
            ],
            [
                'path' => '/dashboard/forms-requests/forms-desk-1/',
                'target' => 'http://localhost:1337/lab/csrf/changing-password/',
                'title' => 'Password Support Ticket',
                'summary' => 'Coordinate request-driven assistance for members who need manual resets.',
            ],
            [
                'path' => '/dashboard/forms-requests/forms-desk-3/',
                'target' => 'http://localhost:1337/lab/csrf/follow/',
                'title' => 'Follower Preferences Hub',
                'summary' => 'Manage alerts for newsletters, podcasts, and live event reminders.',
            ],
            [
                'path' => '/dashboard/access-center/access-center-1/',
                'target' => 'http://localhost:1337/lab/broken-authentication/brute-force/',
                'title' => 'Sign-In Attempt Review',
                'summary' => 'Inspect recent access attempts and coordinate outreach when something looks off.',
            ],
            [
                'path' => '/dashboard/access-center/access-center-2/',
                'target' => 'http://localhost:1337/lab/broken-authentication/no-redirect/',
                'title' => 'Session Handoff Checklist',
                'summary' => 'Verify that returning readers reach their saved destinations without hiccups.',
            ],
            [
                'path' => '/dashboard/access-center/access-center-3/',
                'target' => 'http://localhost:1337/lab/broken-authentication/2FA/',
                'title' => 'Two-Step Enrollment Desk',
                'summary' => 'Oversee device confirmations and special cases for multi-factor sign-ins.',
            ],
            [
                'path' => '/dashboard/verification-desk/verification-desk-1/',
                'target' => 'http://localhost:1337/lab/captcha-bypass/bypass1',
                'title' => 'Visitor Challenge Review',
                'summary' => 'Evaluate challenge responses to keep sign-up flows friendly and fair.',
            ],
            [
                'path' => '/dashboard/verification-desk/verification-desk-2/',
                'target' => 'http://localhost:1337/lab/captcha-bypass/bypass/',
                'title' => 'Sign-Up Challenge Console',
                'summary' => 'Tune challenge prompts for promotions, giveaways, and seasonal events.',
            ],
        ],
    ],
    'sales' => [
        'title' => 'Sales & Billing',
        'path' => '/dashboard/sales/',
        'tagline' => 'Coordinate revenue operations, transfers, and partner purchases.',
        'intro' => 'Handle invoices, ticketing, and merch logistics with quick access to payment forms and ledgers.',
        'features' => [
            [
                'path' => '/dashboard/account-services/account-update-1/',
                'target' => 'http://localhost:1337/lab/idor/invoices/',
                'title' => 'Invoice Center',
                'summary' => 'Review statements, note adjustments, and send confirmations to clients.',
            ],
            [
                'path' => '/dashboard/account-services/account-update-2/',
                'target' => 'http://localhost:1337/lab/idor/ticket-sales/',
                'title' => 'Ticketing Orders Desk',
                'summary' => 'Keep tabs on event reservations and coordinate seat upgrades.',
            ],
            [
                'path' => '/dashboard/account-services/account-update-4/',
                'target' => 'http://localhost:1337/lab/idor/money-transfer/',
                'title' => 'Funds Transfer Queue',
                'summary' => 'Manage internal transfers and approvals for partner payouts.',
            ],
            [
                'path' => '/dashboard/account-services/account-update-7/',
                'target' => 'http://localhost:1337/lab/idor/shopping-cart/',
                'title' => 'Merchandise Cart Overview',
                'summary' => 'Check cart activity for special campaigns and bundle offers.',
            ],
            [
                'path' => '/dashboard/forms-requests/forms-desk-2/',
                'target' => 'http://localhost:1337/lab/csrf/money-transfer/',
                'title' => 'Transfer Authorization Form',
                'summary' => 'Collect approvals for expedited payouts or stipend releases.',
            ],
        ],
    ],
    'operations' => [
        'title' => 'Operations Center',
        'path' => '/dashboard/operations/',
        'tagline' => 'Keep infrastructure healthy with quick diagnostics and on-call tools.',
        'intro' => 'Run uptime checks, queue stock updates, and coordinate night shift maintenance.',
        'features' => [
            [
                'path' => '/dashboard/operations-desk/operations-brief-1/',
                'target' => 'http://localhost:1337/lab/command-injection/ping-low/',
                'title' => 'Network Health Ping',
                'summary' => 'Trigger a light diagnostic to verify remote bureaus are reachable.',
            ],
            [
                'path' => '/dashboard/operations-desk/operations-brief-2/',
                'target' => 'http://localhost:1337/lab/command-injection/ping-hard/',
                'title' => 'Resilience Drill',
                'summary' => 'Run a broader sweep ahead of storm coverage or major events.',
            ],
            [
                'path' => '/dashboard/operations-desk/operations-brief-3/',
                'target' => 'http://localhost:1337/lab/command-injection/stock-check/',
                'title' => 'Stockroom Monitor',
                'summary' => 'Confirm inventory counts before fulfilling print shop and merch requests.',
            ],
            [
                'path' => '/dashboard/operations-desk/operations-brief-4/',
                'target' => 'http://localhost:1337/lab/command-injection/blind-command-injection/',
                'title' => 'Night Shift Checklist',
                'summary' => 'Log after-hours maintenance tasks and escalate anything unusual.',
            ],
            [
                'path' => '/dashboard/performance-monitor/performance-monitor-1/',
                'target' => 'http://localhost:1337/lab/race-condition/race-condition1/',
                'title' => 'Performance Snapshot',
                'summary' => 'Observe request throughput during peak newsletter drops.',
            ],
            [
                'path' => '/dashboard/performance-monitor/performance-monitor-2/',
                'target' => 'http://localhost:1337/lab/race-condition/race-condition2/',
                'title' => 'Campaign Load Rehearsal',
                'summary' => 'Stress test workflows before high-traffic specials go live.',
            ],
        ],
    ],
    'delivery' => [
        'title' => 'Delivery Pipeline',
        'path' => '/dashboard/delivery/',
        'tagline' => 'Oversee automation that syncs data handoffs across desks.',
        'intro' => 'Follow each delivery stage to make sure content packages and feeds arrive on time.',
        'features' => [
            [
                'path' => '/dashboard/delivery-pipeline/delivery-pipeline-1/',
                'target' => 'http://localhost:1337/lab/insecure-deserialization/admin-account-1/',
                'title' => 'Account Provisioning Run',
                'summary' => 'Check onboarding automations when new editors join the roster.',
            ],
            [
                'path' => '/dashboard/delivery-pipeline/delivery-pipeline-2/',
                'target' => 'http://localhost:1337/lab/insecure-deserialization/admin-account-2/',
                'title' => 'Partner Access Batch',
                'summary' => 'Ensure partner credentials are synced before shared deadlines.',
            ],
            [
                'path' => '/dashboard/delivery-pipeline/delivery-pipeline-3/',
                'target' => 'http://localhost:1337/lab/insecure-deserialization/full-privileges/',
                'title' => 'Privileges Review Console',
                'summary' => 'Audit who holds elevated access across content management tools.',
            ],
            [
                'path' => '/dashboard/delivery-pipeline/delivery-pipeline-4/',
                'target' => 'http://localhost:1337/lab/insecure-deserialization/random-nick-generator/',
                'title' => 'Nickname Generator',
                'summary' => 'Coordinate user handle assignments for forums and live chats.',
            ],
            [
                'path' => '/dashboard/delivery-pipeline/delivery-pipeline-5/',
                'target' => 'http://localhost:1337/lab/insecure-deserialization/jwt-attack/',
                'title' => 'Badge Access Sync',
                'summary' => 'Double-check badge lists before events and newsroom walkthroughs.',
            ],
        ],
    ],
    'integrations' => [
        'title' => 'Integrations Hub',
        'path' => '/dashboard/integrations/',
        'tagline' => 'Keep partner feeds, imports, and app integrations aligned.',
        'intro' => 'Share connection details with technology partners and iterate on developer tooling.',
        'features' => [
            [
                'path' => '/dashboard/integration-notes/integration-brief-1/',
                'target' => 'http://localhost:1337/lab/xxe/xml/',
                'title' => 'Data Feed Notes',
                'summary' => 'Coordinate XML feed updates for municipal data sources.',
            ],
            [
                'path' => '/dashboard/api-workshop/api-workshop-1/',
                'target' => 'http://localhost:1337/lab/api-hacking/api-hacking1/',
                'title' => 'API Workshop Console',
                'summary' => 'Walk through sample requests and share code snippets with partners.',
            ],
        ],
    ],
    'archive' => [
        'title' => 'Records Library',
        'path' => '/dashboard/archive/',
        'tagline' => 'Quick access to historical documents, fact sheets, and navigation aids.',
        'intro' => 'Search through curated archives for supporting material, fact packs, and travel notes.',
        'features' => [
            [
                'path' => '/dashboard/document-archive/document-archive-1/',
                'target' => 'http://localhost:1337/lab/file-inclusion/learn-the-capital-1/',
                'title' => 'Capital Cities Primer',
                'summary' => 'Study quick reference cards on world capitals for quiz segments.',
            ],
            [
                'path' => '/dashboard/document-archive/document-archive-2/',
                'target' => 'http://localhost:1337/lab/file-inclusion/learn-the-capital-2/',
                'title' => 'Capital Cities Workbook',
                'summary' => 'Download printable worksheets for classroom outreach visits.',
            ],
            [
                'path' => '/dashboard/document-archive/document-archive-3/',
                'target' => 'http://localhost:1337/lab/file-inclusion/learn-the-capital-3/',
                'title' => 'Capital Cities Companion',
                'summary' => 'Pull up extended notes and trivia for interactive sessions.',
            ],
            [
                'path' => '/dashboard/file-navigator/file-navigator-1/',
                'target' => 'http://localhost:1337/lab/path-traversal/path-traversal-2',
                'title' => 'File Navigator',
                'summary' => 'Jump between shared directories when preparing travel briefs.',
            ],
        ],
    ],
    'studio' => [
        'title' => 'Template Studio',
        'path' => '/dashboard/studio/',
        'tagline' => 'Design hub for page templates, layout tweaks, and theme experiments.',
        'intro' => 'Preview layout updates and collaborate on styling changes with editors and designers.',
        'features' => [
            [
                'path' => '/dashboard/template-studio/template-studio-1/',
                'target' => 'http://localhost:1337/lab/ssti/SSTI-Basic/',
                'title' => 'Template Preview Sandbox',
                'summary' => 'Draft layout experiments before pushing them into production.',
            ],
            [
                'path' => '/dashboard/template-studio/template-studio-2/',
                'target' => 'http://localhost:1337/lab/ssti/SSTI-Blacklist/',
                'title' => 'Theme Rules Manager',
                'summary' => 'Fine-tune display rules for special sections and campaigns.',
            ],
        ],
    ],
];

$navOrder = ['newsroom', 'gallery', 'research', 'profile', 'sales', 'operations', 'delivery', 'integrations', 'archive', 'studio'];


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


    $_SERVER['SCRIPT_NAME'] = $route['canonical_path'] ?? ($route['path'] ?? '/dashboard/');

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


$featureMap = [];
$sectionPathMap = [];
$manifestSections = [];

foreach ($sections as $slug => $section) {
    $path = $section['path'];
    $normalizedSectionPath = normalizeDashboardPath($path);
    $sectionPathMap[$normalizedSectionPath] = $slug;

    $manifestSection = [
        'slug' => $slug,
        'title' => $section['title'],
        'path' => $normalizedSectionPath,
        'features' => [],
    ];

    foreach ($section['features'] as $feature) {
        $featurePath = normalizeDashboardPath($feature['path']);
        $featureEntry = [
            'target' => $feature['target'],
            'title' => $feature['title'],
            'summary' => $feature['summary'],
            'section' => $slug,
            'path' => $featurePath,
            'canonical_path' => $featurePath,
        ];

        $featureMap[$featurePath] = $featureEntry;

        $manifestSection['features'][] = [
            'path' => $featurePath,
            'target' => $feature['target'],
            'title' => $feature['title'],
        ];
    }

    $manifestSections[] = $manifestSection;
}

$manifestPayload = [
    'generated_at' => gmdate('c'),
    'sections' => $manifestSections,
];
$manifestJson = json_encode($manifestPayload, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

$requestedPath = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?? '';
$normalizedRequest = normalizeDashboardPath($requestedPath);

if (isset($featureMap[$normalizedRequest])) {
    serveFriendlyLab($featureMap[$normalizedRequest]);
}

if ($normalizedRequest === '/dashboard/') {
    $pageTitle = $siteTitle;
    $activeSlug = null;
    $content = renderHomeContent($sections, $navOrder);
    renderLayout($pageTitle, $activeSlug, $content, $sections, $navOrder, $manifestJson);
    exit;
}

if (isset($sectionPathMap[$normalizedRequest])) {
    $slug = $sectionPathMap[$normalizedRequest];
    $section = $sections[$slug];
    $pageTitle = $section['title'] . ' · ' . $siteTitle;
    $content = renderSectionContent($section);
    renderLayout($pageTitle, $slug, $content, $sections, $navOrder, $manifestJson);
    exit;
}

http_response_code(404);
echo 'Page not found';
exit;

function renderLayout(string $pageTitle, ?string $activeSlug, string $content, array $sections, array $navOrder, string $manifestJson): void
{
    header('Content-Type: text/html; charset=utf-8');
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES); ?></title>
    <meta name="description" content="Daily Dispatch portal with newsroom highlights, research, operations, and member services.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --surface: #ffffff;
            --surface-alt: #f5f7fa;

            --text: #1d2433;
            --muted: #4a5668;
            --border: #d8e0ef;
            --accent: #1f6feb;
            --accent-dark: #184fb7;
            --accent-soft: rgba(31, 111, 235, 0.08);

        }
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;

            background: var(--surface-alt);
            color: var(--text);
        }
        a {
            color: inherit;
        }
        header.site-header {

            background: var(--surface);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .header-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1.5rem;
            padding: 1.25rem 5vw;

        }
        .logo {
            font-weight: 700;
            font-size: 1.25rem;
            letter-spacing: 0.04em;
        }

        nav.primary-nav {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex-wrap: wrap;
        }
        nav.primary-nav a {
            padding: 0.45rem 0.8rem;
            border-radius: 999px;
            font-weight: 500;
            color: var(--muted);
            text-decoration: none;
        }
        nav.primary-nav a:hover,
        nav.primary-nav a:focus {
            color: var(--accent);
            background: var(--accent-soft);
        }
        nav.primary-nav a[aria-current="page"] {
            background: var(--accent);
            color: #fff;
            box-shadow: 0 8px 24px rgba(31, 111, 235, 0.25);
        }
        main {
            padding: 3rem 5vw 4rem 5vw;
            display: grid;
            gap: 3rem;
        }
        .hero {
            background: var(--surface);
            border-radius: 1.5rem;
            padding: clamp(1.75rem, 2vw, 3rem);
            border: 1px solid var(--border);

            display: grid;
            gap: 1.5rem;
        }
        .hero h1 {

            margin: 0;
            font-size: clamp(2rem, 4vw, 2.6rem);
            line-height: 1.1;
        }
        .hero p {
            margin: 0;
            color: var(--muted);
            font-size: 1.05rem;
            max-width: 64ch;

        }
        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .btn-primary,
        .btn-outline {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.4rem;
            padding: 0.75rem 1.4rem;
            border-radius: 999px;
            font-weight: 600;
            text-decoration: none;
        }
        .btn-primary {
            background: var(--accent);
            color: #fff;

        }
        .btn-primary:hover,
        .btn-primary:focus {
            background: var(--accent-dark);

        }
        .btn-outline {
            border: 1px solid var(--accent);
            color: var(--accent);

        }
        section.dashboard-section {
            display: grid;
            gap: 1.25rem;
        }
        section.dashboard-section header {
            display: grid;
            gap: 0.35rem;
        }
        section.dashboard-section h2 {
            margin: 0;
            font-size: 1.75rem;
        }
        section.dashboard-section p.lead {
            margin: 0;
            color: var(--muted);
        }
        .card-grid {
            display: grid;
            gap: 1.25rem;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
        }
        article.card {
            background: var(--surface);
            border-radius: 1.25rem;
            padding: 1.5rem;
            border: 1px solid var(--border);
            display: grid;
            gap: 0.75rem;
            align-content: start;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        article.card:hover,
        article.card:focus-within {
            transform: translateY(-4px);
            box-shadow: 0 14px 32px rgba(15, 23, 42, 0.12);
        }
        article.card h3 {
            margin: 0;
            font-size: 1.2rem;
        }
        article.card p {
            margin: 0;
            color: var(--muted);
            line-height: 1.5;
        }
        article.card a.card-link {
            margin-top: 0.5rem;
            font-weight: 600;
            color: var(--accent);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
        }
        footer.site-footer {
            background: var(--surface);
            border-top: 1px solid var(--border);
            padding: 2.5rem 5vw;
            display: grid;
            gap: 1rem;
            color: var(--muted);
        }
        footer.site-footer strong {
            color: var(--text);
        }
        .category-table {
            display: grid;
            gap: 1rem;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        }
        .category-card {
            background: var(--surface);
            border-radius: 1rem;
            border: 1px solid var(--border);
            padding: 1.25rem;
            display: grid;
            gap: 0.5rem;
        }
        .category-card a {
            font-weight: 600;
            text-decoration: none;
            color: var(--accent);
        }
        @media (max-width: 720px) {
            nav.primary-nav {
                justify-content: flex-start;
            }
            .header-inner {
                flex-direction: column;
                align-items: flex-start;

            }
        }
    </style>
</head>
<body>

    <header class="site-header" role="banner">
        <div class="header-inner">
            <div class="logo" aria-label="Daily Dispatch logo">Daily Dispatch</div>
            <nav class="primary-nav" aria-label="Primary">
                <a href="/dashboard/"<?php echo $activeSlug === null ? ' aria-current="page"' : ''; ?>>Home</a>
                <?php foreach ($navOrder as $slug): $section = $sections[$slug]; ?>
                    <a href="<?php echo htmlspecialchars($section['path'], ENT_QUOTES); ?>"<?php echo $activeSlug === $slug ? ' aria-current="page"' : ''; ?>><?php echo htmlspecialchars($section['title'], ENT_QUOTES); ?></a>
                <?php endforeach; ?>
            </nav>
        </div>
    </header>
    <main>
        <?php echo $content; ?>
    </main>
    <footer class="site-footer">
        <div><strong>Daily Dispatch</strong> · A community newsroom delivering coverage, guides, and member services.</div>
        <div>Contact the team at <a href="mailto:hello@dailydispatch.local">hello@dailydispatch.local</a> or call (555) 010-7331.</div>
        <div>© <?php echo date('Y'); ?> Daily Dispatch Media Cooperative. All rights reserved.</div>
    </footer>
    <script type="application/json" id="feature-manifest"><?php echo htmlspecialchars($manifestJson, ENT_NOQUOTES); ?></script>
</body>
</html>
<?php
}

function renderHomeContent(array $sections, array $navOrder): string
{
    $highlightSlugs = array_slice($navOrder, 0, 3);
    $highlights = [];
    foreach ($highlightSlugs as $slug) {
        $section = $sections[$slug];
        $feature = $section['features'][0] ?? null;
        if ($feature !== null) {
            $highlights[] = [
                'section' => $section,
                'feature' => $feature,
            ];
        }
    }

    ob_start();
    ?>
    <section class="hero" aria-labelledby="hero-title">
        <div>
            <p class="kicker" style="text-transform: uppercase; letter-spacing: 0.2em; font-size: 0.8rem; color: var(--accent); margin: 0;">Welcome inside</p>
            <h1 id="hero-title">A newsroom home for every desk</h1>
            <p>Stay on top of headlines, coordinate media drops, and manage member services without leaving the dashboard.</p>
        </div>
        <div class="hero-actions">
            <a class="btn-primary" href="<?php echo htmlspecialchars($sections['newsroom']['path'], ENT_QUOTES); ?>">Explore latest coverage</a>
            <a class="btn-outline" href="<?php echo htmlspecialchars($sections['profile']['path'], ENT_QUOTES); ?>">Manage member profiles</a>
        </div>
    </section>

    <section class="dashboard-section" aria-labelledby="quick-highlights">
        <header>
            <h2 id="quick-highlights">Spotlight</h2>
            <p class="lead">Fresh picks from across the newsroom, media team, and research desk.</p>
        </header>
        <div class="card-grid">
            <?php foreach ($highlights as $highlight): $section = $highlight['section']; $feature = $highlight['feature']; ?>
                <article class="card">
                    <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.14em; color: var(--accent); font-weight: 600;"><?php echo htmlspecialchars($section['title'], ENT_QUOTES); ?></div>
                    <h3><?php echo htmlspecialchars($feature['title'], ENT_QUOTES); ?></h3>
                    <p><?php echo htmlspecialchars($feature['summary'], ENT_QUOTES); ?></p>
                    <a class="card-link" href="<?php echo htmlspecialchars($feature['path'], ENT_QUOTES); ?>" aria-label="Open <?php echo htmlspecialchars($feature['title'], ENT_QUOTES); ?>">Open feature →</a>

                </article>
            <?php endforeach; ?>
        </div>
    </section>


    <section class="dashboard-section" aria-labelledby="section-directory">
        <header>
            <h2 id="section-directory">Browse by desk</h2>
            <p class="lead">Jump straight to the area you collaborate with the most.</p>
        </header>
        <div class="category-table">
            <?php foreach ($navOrder as $slug): $section = $sections[$slug]; ?>
                <div class="category-card">
                    <div style="font-weight: 600; font-size: 1.05rem;"><?php echo htmlspecialchars($section['title'], ENT_QUOTES); ?></div>
                    <p style="margin: 0; color: var(--muted);"><?php echo htmlspecialchars($section['tagline'], ENT_QUOTES); ?></p>
                    <a href="<?php echo htmlspecialchars($section['path'], ENT_QUOTES); ?>" aria-label="Visit <?php echo htmlspecialchars($section['title'], ENT_QUOTES); ?> section">Visit section →</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="dashboard-section" aria-labelledby="about-account">
        <header>
            <h2 id="about-account">Your account hub</h2>
            <p class="lead">Adjust your profile, manage sign-ins, and update notifications.</p>
        </header>
        <div class="card-grid">
            <?php $profile = $sections['profile']; ?>
            <?php foreach (array_slice($profile['features'], 0, 3) as $feature): ?>
                <article class="card">
                    <h3><?php echo htmlspecialchars($feature['title'], ENT_QUOTES); ?></h3>
                    <p><?php echo htmlspecialchars($feature['summary'], ENT_QUOTES); ?></p>
                    <a class="card-link" href="<?php echo htmlspecialchars($feature['path'], ENT_QUOTES); ?>">Manage →</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
    <?php
    return (string) ob_get_clean();
}

function renderSectionContent(array $section): string
{
    ob_start();
    ?>
    <section class="hero" aria-labelledby="section-title">
        <div>
            <h1 id="section-title"><?php echo htmlspecialchars($section['title'], ENT_QUOTES); ?></h1>
            <p><?php echo htmlspecialchars($section['intro'], ENT_QUOTES); ?></p>
        </div>
        <div class="hero-actions">
            <span class="btn-outline" aria-live="polite"><?php echo count($section['features']); ?> feature<?php echo count($section['features']) === 1 ? '' : 's'; ?> available</span>
        </div>
    </section>

    <section class="dashboard-section" aria-label="<?php echo htmlspecialchars($section['title'], ENT_QUOTES); ?> links">
        <div class="card-grid">
            <?php foreach ($section['features'] as $feature): ?>
                <article class="card">
                    <h3><?php echo htmlspecialchars($feature['title'], ENT_QUOTES); ?></h3>
                    <p><?php echo htmlspecialchars($feature['summary'], ENT_QUOTES); ?></p>
                    <a class="card-link" href="<?php echo htmlspecialchars($feature['path'], ENT_QUOTES); ?>">Open feature →</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
    <?php
    return (string) ob_get_clean();
}
