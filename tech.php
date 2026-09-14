<?php

$posts = [
  [
    'title' => 'Some tech title 1', 
    'content' => 'Some tech content 1', 
    'date' => 'January 1, 2021', 
    'author' => 'Pets'
    ],
    [
    'title' => 'Some tech title 2', 
    'content' => 'Some tech content 2', 
    'date' => 'January 2, 2021', 
    'author' => 'Alex'
    ],
    [
    'title' => 'Some tech title 3', 
    'content' => 'Some tech content 3', 
    'date' => 'January 3, 2021', 
    'author' => 'Juss'
    ],
    [
    'title' => 'Some tech title 4', 
    'content' => 'Some tech content 4', 
    'date' => 'January 4, 2021', 
    'author' => 'Ron'
    ],
];

?>
<?php include __DIR__ . '/partials/header.php'; ?>
    
    
    <main class="container">
      
      <div class="row g-5">
        <div class="col-md-8">
          <?php include __DIR__ . '/partials/posts.php'; ?>
        </div>
        <div class="col-md-4">
          <?php include __DIR__ . '/partials/sidebar.php'; ?>
        </div>
      </div>
    </main>
  <?php include __DIR__ . '/partials/footer.php'; ?>  
