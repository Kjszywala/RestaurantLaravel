<?php
  // Pobieranie numeru strony z adresu URL
  $page = isset($_GET['page']) ? $_GET['page'] : 1;
  
  // Ustawienie ścieżki do pliku PDF
  $pdf_file = 'menu.pdf';
  
  // Generowanie linków do kolejnych stron
  $prev_page = $page - 1;
  $next_page = $page + 1;
?>

<!DOCTYPE html>
<html>
<head>
  <title>PDF Viewer</title>
</head>
<body>
  <div>
    <iframe src="<?php echo $pdf_file; ?>#page=<?php echo $page; ?>" width="100%" height="1000"></iframe>
  </div>
</body>
</html>
