<h1 class="code-line" data-line-start=0 data-line-end=1 ><a id="Application_Setup_and_User_Guide_0"></a>Application Setup and User Guide</h1>
<p class="has-line-data" data-line-start="2" data-line-end="3">This user guide provides instructions for setting up and running the web application built with Laravel, which allows users to log in using their GitHub accounts. The application utilizes GitHub Single Sign-On (SSO) and Laravel Socialite for authentication.</p>
<h2 class="code-line" data-line-start=4 data-line-end=5 ><a id="Prerequisites_4"></a>Prerequisites</h2>
<p class="has-line-data" data-line-start="5" data-line-end="6">Before setting up and running the application, make sure you have the following prerequisites installed on your system:</p>
<ul>
<li class="has-line-data" data-line-start="6" data-line-end="7">PHP</li>
<li class="has-line-data" data-line-start="7" data-line-end="8">Composer</li>
<li class="has-line-data" data-line-start="8" data-line-end="9">Laravel Framework</li>
<li class="has-line-data" data-line-start="9" data-line-end="11">A GitHub account</li>
</ul>
<h2 class="code-line" data-line-start=11 data-line-end=12 ><a id="Installation_11"></a>Installation</h2>
<p class="has-line-data" data-line-start="12" data-line-end="13">Follow the steps below to set up the application:</p>
<ol>
<li class="has-line-data" data-line-start="13" data-line-end="14">Clone the application repository from GitHub using the following command:</li>
</ol>
<ul>
<li class="has-line-data" data-line-start="14" data-line-end="15"><a href="https://github.com/MariVillaGat/testgit.git">https://github.com/MariVillaGat/testgit.git</a></li>
</ul>
<ol start="2">
<li class="has-line-data" data-line-start="15" data-line-end="16">
<p class="has-line-data" data-line-start="15" data-line-end="16">Navigate to the application directory</p>
</li>
<li class="has-line-data" data-line-start="16" data-line-end="17">
<p class="has-line-data" data-line-start="16" data-line-end="17">Install the application dependencies using Composer</p>
</li>
<li class="has-line-data" data-line-start="17" data-line-end="18">
<p class="has-line-data" data-line-start="17" data-line-end="18">Create a new .env file</p>
</li>
<li class="has-line-data" data-line-start="18" data-line-end="19">
<p class="has-line-data" data-line-start="18" data-line-end="19">Generate a new application key</p>
</li>
<li class="has-line-data" data-line-start="19" data-line-end="25">
<p class="has-line-data" data-line-start="19" data-line-end="20">Open the .env file and update the following configuration variables:</p>
<p class="has-line-data" data-line-start="21" data-line-end="24">APP_NAME: The name of your application<br>
APP_URL: The URL of your application<br>
GITHUB_CLIENT_ID and GITHUB_CLIENT_SECRET: Obtain these values by creating a new OAuth application in your GitHub account. Refer to the GitHub documentation for instructions on how to create a new OAuth application.</p>
</li>
</ol>
<h2 class="code-line" data-line-start=25 data-line-end=26 ><a id="Running_the_Application_25"></a>Running the Application</h2>
<p class="has-line-data" data-line-start="26" data-line-end="28">To run the application, follow the steps below:<br>
Start the development server:</p>
<ol>
<li class="has-line-data" data-line-start="29" data-line-end="31">
<p class="has-line-data" data-line-start="29" data-line-end="30">Open your web browser and navigate to the application’s URL (e.g., <a href="http://localhost:8000">http://localhost:8000</a>).</p>
</li>
<li class="has-line-data" data-line-start="31" data-line-end="33">
<p class="has-line-data" data-line-start="31" data-line-end="32">Click on the “Login with GitHub” button to initiate the GitHub Single Sign-On (SSO) process.</p>
</li>
<li class="has-line-data" data-line-start="33" data-line-end="35">
<p class="has-line-data" data-line-start="33" data-line-end="34">You will be redirected to GitHub for authentication. Enter your GitHub credentials and authorize the application.</p>
</li>
<li class="has-line-data" data-line-start="35" data-line-end="37">
<p class="has-line-data" data-line-start="35" data-line-end="36">Upon successful authentication, you will be redirected back to the application, and you should be logged in</p>
</li>
</ol>
<h2 class="code-line" data-line-start=37 data-line-end=38 ><a id="Key_Features_37"></a>Key Features</h2>
<p class="has-line-data" data-line-start="38" data-line-end="39">The web application built with Laravel and utilizing GitHub Single Sign-On (SSO) and Laravel Socialite for authentication offers the following key features:</p>
<ul>
<li class="has-line-data" data-line-start="40" data-line-end="41">GitHub Single Sign-On (SSO): Users can log in to the application using their GitHub accounts, eliminating the need for separate credentials.</li>
<li class="has-line-data" data-line-start="41" data-line-end="42">Seamless Authentication: Laravel Socialite handles the authentication process, making it simple and secure.</li>
<li class="has-line-data" data-line-start="42" data-line-end="44">User Management: Once logged in, users can access their account information and perform various actions as defined by the application’s functionality.</li>
</ul>
<h2 class="code-line" data-line-start=44 data-line-end=45 ><a id="Architecture_and_Deployment_Requirements_44"></a>Architecture and Deployment Requirements</h2>
<p class="has-line-data" data-line-start="45" data-line-end="46">For production or staging deployment, the following infrastructure requirements should be considered:</p>
<ul>
<li class="has-line-data" data-line-start="46" data-line-end="48">
<p class="has-line-data" data-line-start="46" data-line-end="47">Web Server: Deploy the Laravel application on a web server such as Apache or Nginx.</p>
</li>
<li class="has-line-data" data-line-start="48" data-line-end="50">
<p class="has-line-data" data-line-start="48" data-line-end="49">Database: Configure a database server (e.g., MySQL, PostgreSQL) and update the .env file with the appropriate credentials.</p>
</li>
<li class="has-line-data" data-line-start="50" data-line-end="52">
<p class="has-line-data" data-line-start="50" data-line-end="51">Caching: Enable a caching mechanism (e.g., Redis) for better performance.</p>
</li>
<li class="has-line-data" data-line-start="52" data-line-end="54">
<p class="has-line-data" data-line-start="52" data-line-end="53">HTTPS: Secure the application by enabling HTTPS using SSL certificates.</p>
</li>
<li class="has-line-data" data-line-start="54" data-line-end="56">
<p class="has-line-data" data-line-start="54" data-line-end="55">Environment Variables: Set environment-specific variables in the .env file for production and staging environments.</p>
</li>
<li class="has-line-data" data-line-start="56" data-line-end="58">
<p class="has-line-data" data-line-start="56" data-line-end="57">Scalability: Consider load balancing and horizontal scaling to handle high traffic.</p>
</li>
<li class="has-line-data" data-line-start="58" data-line-end="60">
<p class="has-line-data" data-line-start="58" data-line-end="59">Monitoring and Logging: Implement logging and monitoring solutions to track application performance and troubleshoot issues.</p>
</li>
<li class="has-line-data" data-line-start="60" data-line-end="62">
<p class="has-line-data" data-line-start="60" data-line-end="61">Security: Implement necessary security measures such as secure session management</p>
</li>
</ul>
