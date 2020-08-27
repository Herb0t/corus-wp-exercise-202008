# Corus WordPress Exercise
1. [Environment Setup](#environment)
2. [WordPress Configuration](#wordpress)
3. [Slick Slider](#slick-slider)
3. [The Exercise](#exercise)
<a name="environment"></a>
## Environment Setup
To setup your environment:
1. Download and install Docker from [https://www.docker.com/](https://www.docker.com/)
2. Fork [https://github.com/ShawONEX/corus-wp-exercise](https://github.com/ShawONEX/corus-wp-exercise) to your own GitHub repo
3. Clone your new forked repo to a local folder on your computer
4. Go to the root of the cloned repo in Terminal/Command Prompt/Power Shell (you should see docker-compose.yml in the list of files)
5. Run the following command: ```docker-compose up```
6. Open a browser and go to [http://localhost:8000](http://localhost:8000) and follow the instructions to complete the WordPress database installation

**NOTE: You can use any enviroment/server setup you wish like LAMP/WAMP etc. Docker is provided as one possible solution.**

<a name="wordpress"></a>
## WordPress Configuration
1. Go to [http://localhost:8000/wp-admin/](http://localhost:8000/wp-admin/) and log-in as the administrator
2. Enable ```Corus Theme``` in the appearance settings
3. Enable ```Advanced Custom Fields``` in the plugins section
<a name="exercise"></a>

<a name="slick-slider"><a>
## Slick Slider Usage
The required slick files are contained in the ```components/slick-slider``` folder:
1. CSS file needs to be included in the ```<head>```
2. Add slick.js before your closing ```</body>``` tag (slick depends on jQuery)
### HTML Markup
```
<div class="your-class">
  <div>your content</div>
  <div>your content</div>
  <div>your content</div>
</div>
```
### Initialization
```
$('.your-class').slick();
```
## The Exercise
Modify the 'Corus Theme' to add the following functionality:
* Add a custom post type called "gallery". This post type will ONLY have the following fields
    * Title (default WordPress field)
    * Slider Image 1 (Image upload field)
    * Slider Image 2 (Image upload field)
    * Slider Image 3 (Image upload field)
* Use **Advanced Custom Fields** to create the three slider image fields (plugin provided in the repo)
* Create a single post-type page to output the gallery images based on the post_id.
* Using slick slider [http://kenwheeler.github.io/slick/](http://kenwheeler.github.io/slick/) output the three images to create the "single item" carousel

## Instructions
* Please use OOP where necessary
* Please use best security & sanitization practices where necessary
* Please use Git workflow best practices 
* Submit the url to your forked repo with the completed work for review (please ensure that the repo is public)
* Submit a backup of your working database in an .sql format
* **Please do not push anything to this repo**

