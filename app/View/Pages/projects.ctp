<script type = "text/javascript">
    $(document).ready(function(){
        $('.galleryExpand').click(function(){
            $(this).parent().next('.gallery').slideToggle();
            if($(this).html() == 'See Gallery'){
                $(this).html('Collapse Gallery');
            }
            else{
                $(this).html('See Gallery');
            }
        });
        $('.card').click(function(){
            i = $(this).find('img');
            $('#lightboxImg').attr('src', i.attr('src'));
            $('#lightbox').fadeIn('fast');
            $('body').css('overflow', 'hidden');
        });
        $('#lightbox').click(function(){
            $('body').css('overflow', 'auto');
            $('#lightboxImg').attr('src', '');
            $(this).fadeOut('fast');
        });
    });
</script>

<h1>Projects</h1>


<?php // TODO: Make portfolio-item an element, move all this stuff to a database? ?>


<div class = "portfolio-item">
    <div class = "left-column">
        <?php echo $this->Html->Image('projects/speedsters/speedsters-tilt.png'); ?>
    </div>
    <div class = "right-column">
        <h2>Speedsters Snack Promo</h2>
        <p>Task: Distribute the all-new Speedsters snack brand among its target audience and generate social media buzz.</p>
        <p>Result: Using the Flashfoto Image API, developed a custom branded application that allows users to picture themselves driving a sports car. When a user uploads a photo, the app automatically extracts the face and hair of its subject and places him or her in a fantasy driving scene.</p>
        <p>The app keeps track of each photo's share numbers, so the photo with the highest virality is rewarded at the end of the contest.</p>
        <?php
        echo $this->Html->link('View Demo', 'http://speedsters.annawygant.com', array(
            'class'=>'btn',
            'target' => '_blank'
        ));
        ?>
    </div>
</div>

<div class = "portfolio-item">
    <div class = "left-column">
        <?php echo $this->Html->Image('projects/ltdn-site/ltdn-tilt.png'); ?>
    </div>
    <div class = "right-column">
        <h2>Los Tigres del Norte Band Site</h2>
        <p>Task: Design a fresh, responsive website that includes the all-new Jefe de Jefes logo. Follow content guidelines to ensure compatibility with a pre-existing CMS.</p>
        <p>Result: Delivered two unique designs for the band to choose from. The first is bold and modern, consisting of new-age typography including a hashtag cloud and vibrant gradient art. The second gives off a more traditional feel with vintage looks, real-life textures, and a natural color scheme.</p>
        <p>This iconic latin band went with the latter option that represents the group's timelessness and universal appeal.</p>
        <?php
        echo $this->Html->link('See Gallery', 'javascript:;', array(
            'class'=>'btn galleryExpand'
        ));
        ?>
    </div>
    <div class = "gallery">
        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/ltdn-site/design-1.jpg');?>
            </div>
            <div class = "desc">
                <h4>Modern Entertainment</h4>
                <p>This homepage design brings an exciting concert atmosphere to the site and engages with a hashtag cloud hero image.</p>
            </div>
        </div>
        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/ltdn-site/design-2.jpg');?>
            </div>
            <div class = "desc">
                <h4>Keeping it Classy</h4>
                <p>Since the band's inception in 1968, Los Tigres del Norte have grown to become universally beloved members of the latin community. This vintage design pays homage to the group's norteño roots and western style.</p>
            </div>
        </div>
    </div>
</div>

<div class = "portfolio-item">
    <div class = "left-column">
        <?php echo $this->Html->Image('projects/ff-labs/home-tilt.png'); ?>
    </div>
    <div class = "right-column">
        <h2>Rebranding of Flashfoto, Inc.</h2>
        <p>Task: Rebrand Flashfoto, Inc. as Flashfoto Labs. Create a new logo and develop a responsive, intuitive corporate website. Organize information about the company’s products, services, and intellectual property.</p>
        <p>Result: The addition of the word ‘Labs’ to the company name indicated a strong need for scientific elements throughout the design. By impelenting clean, thin lines within a bold color scheme, I brought simplicity and elegance to this standout design.</p>
        <?php
        echo $this->Html->link('See Gallery', 'javascript:;', array(
            'class'=>'btn galleryExpand'
        ));
        ?>
    </div>
    <div class = "gallery">
        <?php //TODO: Put card blocks into an element ?>
        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/ff-labs/large/logo.png');?>
            </div>
            <div class = "desc">
                <h4>Logo</h4>
                <p>For the computer vision technology company specializing in photo manipulation, I created a geometric logo that hints towards vision and cameras.</p>
            </div>
        </div>

        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/ff-labs/large/home.jpg');?>
            </div>
            <div class = "desc">
                <h4>Home Screen</h4>
                <p>A simple and concise home screen navigation with large tap targets.</p>
            </div>
        </div>

        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/ff-labs/large/solutions.jpg');?>
            </div>
            <div class = "desc">
                <h4>Secondary Navigation</h4>
                <p>A carousel-style showcase offers users an "at-a-glance" look at products and allows users to read further by tapping anywhere on a row.</p>
            </div>
        </div>

        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/ff-labs/large/case-study.jpg');?>
            </div>
            <div class = "desc">
                <h4>In-Depth</h4>
                <p>An in-depth page displays information in an easily digestible vertical-scroll format.</p>
            </div>
        </div>

    </div>

</div>


<div class = "portfolio-item">
    <div class = "left-column">
        <?php echo $this->Html->Image('projects/tiger/tiger-tilt.png'); ?>
    </div>
    <div class = "right-column">
        <h2>Singing Tiger</h2>
        <p>What started out as a concept for a virtual singing greeting card for a client ended up as a colorful art piece inspired by the work of designer <?php echo $this->Html->link('Andreas Preis', 'http://designerpreis.com/', array('target'=>'_blank')); ?>.</p>
        <p>Check out the full gallery for more iterations of this piece.</p>
        <?php
        echo $this->Html->link('See Gallery', 'javascript:;', array(
            'class'=>'btn galleryExpand'
        ));
        ?>
    </div>
    <div class = "gallery">
        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/tiger/line-art.jpg');?>
            </div>
            <div class = "desc">
                <h4>Line Art</h4>
                <p>Completed the piece with additional line art and patterns.</p>
            </div>
        </div>
        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/tiger/color.jpg');?>
            </div>
            <div class = "desc">
                <h4>Color Fields</h4>
                <p>Digitally translated the sketch and decided on a color scheme.</p>
            </div>
        </div>
        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/tiger/sketch.jpg');?>
            </div>
            <div class = "desc">
                <h4>Sketch</h4>
                <p>Original sketch.</p>
            </div>
        </div>
    </div>
</div>


<div class = "portfolio-item">
    <div class = "left-column">
        <?php echo $this->Html->Image('projects/fotam/fotam-tilt.png'); ?>
    </div>
    <div class = "right-column">
        <h2>Fotam T-Shirt Design</h2>
        <p>During my time at Flashfoto, I was a core part of the development team for revolutionary events software. The application, dubbed "Fotam", served as a central upload hub and gallery for photos taken at any event. The photos then automatically appeared in a crowdsourced slideshow that scaled to any display size.</p>
        <p>The Fotam platform was adopted by none other than the Latin music legends, Los Tigres del Norte. We installed our slideshow at several LTDN concerts and had success using it as a photo aggregation mechanism for special media campaigns.</p>
        <p>Because the application was better utilized over mobile device networks rather than DSLRs, identifying ourselves as legitimate photographers at concerts with tens of thousands of people became a challenge. Our solution? Come up with some fancy T-shirts.</p>
        <?php
        echo $this->Html->link('See Gallery', 'javascript:;', array(
            'class'=>'btn galleryExpand'
        ));
        ?>
    </div>
    <div class = "gallery">
        <div class = "card">
            <div class = "imgContainer">
                <?php echo $this->Html->Image('projects/fotam/fotam-tshirt.jpg');?>
            </div>
            <div class = "desc">
                <h4>Tshirt</h4>
                <p>A Tshirt identifying us as part of the official crew.</p>
            </div>
        </div>
    </div>
</div>


<div id = "lightbox">
    <div style = "position:static">
        <p>Tap anywhere to close.</p>
        <img id = "lightboxImg"/>
    </div>
</div>