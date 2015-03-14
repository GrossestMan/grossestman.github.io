<?php 
/* [INFO 2300 Project 1] portfolio.php 
 * Personal site of Noah Grossman- portfolio
 */

$CURRENT_PAGE = 'Portfolio';

require("header.php");
?>

    <div class="section">
    <div class="chunk">
        <h2>Portfolio</h2>
        <div id="portfolio">
        <?php
        //portfolio items
            //item 1
            $postArray[0] = array(
                'link' => 'http://cs130.cs.cornell.edu/users/nbg22fa13/www/world/p2/index.php',
                'title' => 'Ithaca Apple Harvest Festival Website Redesign',
                'imgLoc' => 'images/AppleFest.png',
                'imgAlt' => 'Apple Fest site',
                'description' => 'Redesigned Ithaca Apple Harvest Festival Website for INFO 1300 project.'
            );
            //item 2
            $postArray[1] = array(
                'link' => 'http://cs130.cs.cornell.edu/users/nbg22fa13/www/world/p3/index.php',
                'title' => 'Movie Maniacs Website',
                'imgLoc' => 'images/Movie.png',
                'imgAlt' => 'Movie Maniacs site',
                'description' => 'Created movie review website, Movie Manicacs, where users can post, rate, and review movies.'
            );
            //item 3
            $postArray[2] = array(
                'link' => 'http://cs130.cs.cornell.edu/users/nbg22fa13/www/world/Final/index.php',
                'title' => 'Cornell HFTP Website Redesign',
                'imgLoc' => 'images/HFTP.png',
                'imgAlt' => 'HFTP home page',
                'description' => 'Project leader for redesigning the Cornell chapter of the Hospitality Financial Technology Professionals (HFTP) club\'s website. Check out the mobile version of site as well!'
            );
            //item 4
            $postArray[3] = array(
                'link' => 'documents/OpenComm_Final.pdf',
                'title' => 'OpenComm HCI Design',
                'imgLoc' => 'images/OpenComm.png',
                'imgAlt' => 'OpenComm conference page',
                'description' => 'Redesigned Android mobile conferencing app, OpenComm. Implemented HCI principles to design a sleek User Interface using Illustrator. Created design specs for front-end team and presentations at group meetings. Collaborated with design team members to pitch, critique, and merge new ideas and layouts.'
            );
            
            for ($i=0, $size=count($postArray); $i<$size; $i++) { ?>
                <div class="half">
                    <h3><?php echo $postArray[$i]['title'] ?></h3>
                    <a href= '<?php echo $postArray[$i]['link']  ?>' target="blank">
                        <img class="screenshot" src='<?php echo $postArray[$i]['imgLoc']  ?>' alt='<?php echo $postArray[$i]['imgAlt']  ?>'>
                    </a>
                    <p><?php echo $postArray[$i]['description']  ?></p>
                </div>
                <?php //make first 2 posts equal height for correct float formatting
                if ($i==1) { ?>
                    <script>
                        var currentArray = document.getElementsByClassName('half');
                        var currentPost = currentArray[<?php echo $i ?>];
                        currentPost.style.marginBottom = '21px';
                    </script>
            <?php }} ?>
        </div>
    </div>
    </div>
    <div class="section">
    <div class="chunk">
        <h2>Courses</h2>
        <h3>Programming and Web Design</h3>
        <ul>
            <li>CS 1110- Introduction to Computing Using Java</li>
            <li>CS 1132- Transition to Matlab</li>
            <li>CS 2110- Object-Oriented Programming and Data Structures</li>
                <li class="description">
                    Implemented OOP principles using Java and made creative programs such as a map-traversing algorithm that determined shortest paths and outputted ideal routes.
                </li>
            <li>INFO 1300- Introduction to Web Design</li>
            <li>INFO 2300- Intermediate Web Design (In Progress)</li>
            <li>CS 4740- Introduction to Natural Language Processing (In Progress)</li>
            <li>INFO 3152- Introduction to Game Design (In progress)</li>
        </ul>
        <h3>Human Computer Interaction</h3>
        <ul>
            <li>INFO 4900- Independent Research: HCI design for mobile app, OpenComm</li>
            <li>INFO 2450- Communication and Technology</li>
            <li class="description">
                Learning firsthand from the researchers at the Social Media Lab, I dove into the psychology behind computer-mediated communication and the HCI design principles that lay the foundation for creating useful, innovative products. Wrote blogs and compose tweets pertaining to communications technologies and their impact on today's society.
            </li>
        </ul>
        <h3>Business</h3>
        <ul>
            <li>ECON 1110- Introduction to Microeconomics</li>
            <li>AEM 2210- Financial Accounting (In Progress)</li>
        </ul>
        <h3>
            Other Related Courses
        </h3>
        <ul>
            <li>ORIE 3800- Information Systems & Analysis (In Progress)</li>
            <li>CS 2800- Discrete Structures</li>
            <li>INFO 2921- Inventing an Information Society</li>
            <li>INFO 2040- Networks</li>
        </ul>  
    </div>
    </div>
    <div class="section">
    <div class="chunk">
        <h2>Experience</h2>
        <h3>AtlantiCare Web Design Intern</h3>
        <p class="indent">Internship with AtlantiCares Information Technology's Web Team. Implemented HTML and CSS in a business environment to design sample web pages and understand how to effectively target a range of audiences in the medical field.</p>
        <h3>FAA Tech Center Intern</h3>
        <p class="indent">Internship at the FAA William J. Hughes Technical Center. Worked on the Weather and Radar Processor (WARP) system. Wrote test procedures for faulty Severe Weather and Tornado Warnings issued over Puerto Rico. Helped redesign the WARP team's SharePoint website by merging similar databases, creating a consistent navigation system, and employing a clean interface. Created end-of-term presentation to division managers.</p>
    </div>
    </div>
    <div class="section">
    <div class="chunk">
        <p id="link"><a href="documents/Current_Resume.pdf" target="blank">Link to full resume</a></p>
        <p id="footer">
            <a href="#top">Back to Top</a>
        </p>
    </div>
    </div>
    
<?php require('footer.php'); ?>