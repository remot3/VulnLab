## Manual Installation

1. Clone the repository:
   ```sh
   git clone https://github.com/remot3/VulnLab
   ```
2. Build the Docker image:
   ```sh
   docker build -t remot3/vulnlab .
   ```
3. Run the container:
   ```sh
   docker run -d -p 1337:80 remot3/vulnlab
   ```
4. Open http://localhost:1337 in your browser.

## Dashboard Route Map

Each friendly dashboard feature URL serves the corresponding scenario below:

- /dashboard/newsroom/ · curated landing page for newsroom coverage
- /dashboard/gallery/ · multimedia showcase and upload tools
- /dashboard/research/ · analytics and reporting utilities
- /dashboard/profile/ · member profile, access, and preference management
- /dashboard/sales/ · revenue operations and payment coordination
- /dashboard/operations/ · infrastructure monitoring and on-call utilities
- /dashboard/delivery/ · automation stages for content handoffs
- /dashboard/integrations/ · partner feed notes and developer tooling
- /dashboard/archive/ · records library and navigation helpers
- /dashboard/studio/ · layout previews and template tooling

- /dashboard/city-newsroom/city-update-1/ > http://localhost:1337/lab/xss/basic-reflected/
- /dashboard/city-newsroom/city-update-2/ > http://localhost:1337/lab/xss/basic-stored/
- /dashboard/city-newsroom/city-update-3/ > http://localhost:1337/lab/xss/basic-dom-based/
- /dashboard/city-newsroom/city-update-4/ > http://localhost:1337/lab/xss/html-attribute-manipulation/
- /dashboard/city-newsroom/city-update-5/ > http://localhost:1337/lab/xss/our-gallery/
- /dashboard/city-newsroom/city-update-6/ > http://localhost:1337/lab/xss/user-agent/
- /dashboard/city-newsroom/city-update-7/ > http://localhost:1337/lab/xss/news/
- /dashboard/city-newsroom/city-update-8/ > http://localhost:1337/lab/xss/image-upload/
- /dashboard/data-research/data-brief-1/ > http://localhost:1337/lab/sql-injection/post-login/
- /dashboard/data-research/data-brief-2/ > http://localhost:1337/lab/sql-injection/find-password/
- /dashboard/data-research/data-brief-3/ > http://localhost:1337/lab/sql-injection/post-blind-boolean/
- /dashboard/data-research/data-brief-4/ > http://localhost:1337/lab/sql-injection/get-blind-error/
- /dashboard/data-research/data-brief-5/ > http://localhost:1337/lab/sql-injection/post-blind-time/
- /dashboard/account-services/account-update-1/ > http://localhost:1337/lab/idor/invoices/
- /dashboard/account-services/account-update-2/ > http://localhost:1337/lab/idor/ticket-sales/
- /dashboard/account-services/account-update-3/ > http://localhost:1337/lab/idor/changing-password/
- /dashboard/account-services/account-update-4/ > http://localhost:1337/lab/idor/money-transfer/
- /dashboard/account-services/account-update-5/ > http://localhost:1337/lab/idor/address-entry/
- /dashboard/account-services/account-update-6/ > http://localhost:1337/lab/idor/about/
- /dashboard/account-services/account-update-7/ > http://localhost:1337/lab/idor/shopping-cart/
- /dashboard/operations-desk/operations-brief-1/ > http://localhost:1337/lab/command-injection/ping-low/
- /dashboard/operations-desk/operations-brief-2/ > http://localhost:1337/lab/command-injection/ping-hard/
- /dashboard/operations-desk/operations-brief-3/ > http://localhost:1337/lab/command-injection/stock-check/
- /dashboard/operations-desk/operations-brief-4/ > http://localhost:1337/lab/command-injection/blind-command-injection/
- /dashboard/integration-notes/integration-brief-1/ > http://localhost:1337/lab/xxe/xml/
- /dashboard/document-archive/document-archive-1/ > http://localhost:1337/lab/file-inclusion/learn-the-capital-1/
- /dashboard/document-archive/document-archive-2/ > http://localhost:1337/lab/file-inclusion/learn-the-capital-2/
- /dashboard/document-archive/document-archive-3/ > http://localhost:1337/lab/file-inclusion/learn-the-capital-3/
- /dashboard/media-desk/media-gallery-1/ > http://localhost:1337/lab/file-upload/unrestricted/
- /dashboard/media-desk/media-gallery-2/ > http://localhost:1337/lab/file-upload/mime-type/
- /dashboard/media-desk/media-gallery-3/ > http://localhost:1337/lab/file-upload/magic-header/
- /dashboard/media-desk/media-gallery-4/ > http://localhost:1337/lab/file-upload/blacklist-1/
- /dashboard/media-desk/media-gallery-5/ > http://localhost:1337/lab/file-upload/blacklist-2/
- /dashboard/forms-requests/forms-desk-1/ > http://localhost:1337/lab/csrf/changing-password/
- /dashboard/forms-requests/forms-desk-2/ > http://localhost:1337/lab/csrf/money-transfer/
- /dashboard/forms-requests/forms-desk-3/ > http://localhost:1337/lab/csrf/follow/
- /dashboard/delivery-pipeline/delivery-pipeline-1/ > http://localhost:1337/lab/insecure-deserialization/admin-account-1/
- /dashboard/delivery-pipeline/delivery-pipeline-2/ > http://localhost:1337/lab/insecure-deserialization/admin-account-2/
- /dashboard/delivery-pipeline/delivery-pipeline-3/ > http://localhost:1337/lab/insecure-deserialization/full-privileges/
- /dashboard/delivery-pipeline/delivery-pipeline-4/ > http://localhost:1337/lab/insecure-deserialization/random-nick-generator/
- /dashboard/delivery-pipeline/delivery-pipeline-5/ > http://localhost:1337/lab/insecure-deserialization/jwt-attack/
- /dashboard/access-center/access-center-1/ > http://localhost:1337/lab/broken-authentication/brute-force/
- /dashboard/access-center/access-center-2/ > http://localhost:1337/lab/broken-authentication/no-redirect/
- /dashboard/access-center/access-center-3/ > http://localhost:1337/lab/broken-authentication/2FA/
- /dashboard/performance-monitor/performance-monitor-1/ > http://localhost:1337/lab/race-condition/race-condition1/
- /dashboard/performance-monitor/performance-monitor-2/ > http://localhost:1337/lab/race-condition/race-condition2/
- /dashboard/template-studio/template-studio-1/ > http://localhost:1337/lab/ssti/SSTI-Basic/
- /dashboard/template-studio/template-studio-2/ > http://localhost:1337/lab/ssti/SSTI-Blacklist/
- /dashboard/api-workshop/api-workshop-1/ > http://localhost:1337/lab/api-hacking/api-hacking1/
- /dashboard/verification-desk/verification-desk-1/ > http://localhost:1337/lab/captcha-bypass/bypass1
- /dashboard/verification-desk/verification-desk-2/ > http://localhost:1337/lab/captcha-bypass/bypass/
- /dashboard/file-navigator/file-navigator-1/ > http://localhost:1337/lab/path-traversal/path-traversal-2
