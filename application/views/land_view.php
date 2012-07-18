<div class="row" id="search-bar">
  <div class="nine mobile-four columns">
    <h5>Welcome! <?php echo $user_title.' '.$firstname.' '.$lastname?></h5>
  </div>
  <div class="three mobile-four columns">
  <?php
    $form = array(
      'class'=>'custom'
    );
    $input = array(
      'name'=>'search',
      'id'=>'searchBox',
      'type'=>'text',
      'placeholder'=>'Search',
    );
    $search = array(
      'name'=>'submit',
      'id'=>'searchSubmit',
      'value'=>'L',
      'class'=>'postfix button icons'
    );
    ?>
    <div class="row collapse">
      <?php echo form_open('u/search')."\n";?>
        <div class="ten mobile-three columns">
          <?php echo form_input($input)."\n";?>
        </div>
        <div class="two mobile-one columns">
          <?php echo form_submit($search)."\n";?>
        </div>
          <?php echo form_close()."\n";?>
    </div>
  </div>
</div>
<div class="row" id="inner-page-wrap">
  <div class="three mobile-four columns">
    <?php echo $profile_image;?>
    <ul class="course-edit">
      
    </ul>
    <ul class="side-nav">

    </ul>
  </div>
  <div class="nine mobile-four columns" id="welcome">
    <h4>Central Repository for Associate Universities.</h4>
    <div id="featuredContent">
      <div>
        <h5>This is a content slider.</h5>
        <p>Each slide holds arbitrary content, like text or actions.</p>
      </div>
      <div>
        <h5>We can include text and buttons, like this!</h5>
        <p>Clickable Buttons.</p>
        <p><a href="#" class="button" target="_blank">Click Me!</a></p>
      </div>
      <div>
        <h5>What? You didn't click it?</h5>
        <p>Placeholder Text</p>
      </div>
    </div>
    <div class="row">
      <div class="six columns">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          
          <a href="">Read More >></a>
        </p>
      </div>
      <div class="six columns">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          
          <a href="">Read More >></a>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="six columns">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          
          <a href="">Read More >></a>
        </p>
      </div>
      <div class="six columns">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          
          <a href="">Read More >></a>
        </p>
      </div>
    </div>
  </div>
</div>