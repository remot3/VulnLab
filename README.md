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
