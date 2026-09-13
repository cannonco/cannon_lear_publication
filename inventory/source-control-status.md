# Cannon-Lear Publishing Source-Control Status

Baseline date: 2026-09-13

## Current repository baseline
This repository already contains both an unpacked `cannon-lear-publishing/` source tree and a `cannon-lear-publishing.zip` release/archive package. This makes it the current canonical source repository for the Cannon-Lear Publishing site code.

## Remaining verification
The repository source has not yet been certified against the current live `books.cannonco.net` production filesystem. A cPanel export of the active theme/custom plugins and any server-side custom CSS/JS is required for a final byte-level reconciliation.

## Policy
Keep custom application/theme/plugin source in the unpacked tree, retain tagged/release ZIPs when useful for deployment, and record third-party WordPress dependencies by exact version rather than copying routine WordPress.org packages.

Do not commit credentials, `.env`, `wp-config.php`, production database dumps, uploads, logs, caches, access tokens or private keys.
