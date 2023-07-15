<!DOCTYPE html>
<html>

<head>
  <title>Pretest</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container col-lg-7 mt-5">
    <h1>Pretest: Mengetahui Kondisi Emosional Anda</h1>
    <p>Pilihlah jawaban yang paling menggambarkan perasaan Anda saat ini dan jelaskan bagaimana Anda merespons atau
      mengatasi situasi tersebut.</p>
    <form method="POST" action="">
      <div class="mb-3">
        <label for="pilihan" class="form-label">Pilih Kondisi:</label>
        <select class="form-select" name="pilihan" id="pilihan" onchange="showNextQuestion()">
          <option value="">Apa yang lebih menggambarkan perasaan saat ini?</option>
          <option value="0">a) Mengatasi rasa marah dan frustrasi dengan cara yang aman dan sehat.</option>
          <option value="1">b) Mencapai ketenangan batin dan konsentrasi yang lebih baik.</option>
        </select>
      </div>
      <div class="mb-3" id="question2" style="display: none;">
        <label for="input2" class="form-label">Bagaimana Anda biasanya merespons atau mengatasi rasa marah dan frustrasi
          dalam kehidupan sehari-hari?</label>
        <select class="form-select" name="input2" id="input2" onchange="showNextQuestion()">
          <option value="">Bagaimana Anda biasanya merespons atau mengatasi rasa marah dan frustrasi dalam kehidupan
            sehari-hari?</option>
          <option value="marah">a) Saya cenderung melepaskan emosi tersebut dengan cara fisik, seperti memukul bantal
            atau berteriak.</option>
          <option value="tenang">b) Saya cenderung mencoba menenangkan diri sendiri dengan pernapasan dalam atau
            berjalan-jalan.</option>
        </select>
      </div>
      <div class="mb-3" id="question3" style="display: none;">
        <label for="input3" class="form-label">Apakah Anda memiliki pengalaman sebelumnya dalam praktik meditasi atau
          mencari cara untuk mencapai ketenangan batin?</label>
        <select class="form-select" name="input3" id="input3" onchange="showNextQuestion()">
          <option value="">Apakah Anda memiliki pengalaman sebelumnya dalam praktik meditasi atau mencari cara untuk
            mencapai ketenangan batin?</option>
          <option value="tenang">a) Ya, saya memiliki pengalaman dalam meditasi atau teknik serupa.</option>
          <option value="marah">b) Tidak, saya baru ingin mencoba metode untuk mencapai ketenangan batin dan konsentrasi
            yang lebih baik.</option>
        </select>
      </div>
      <div class="text-center">
        <input class="btn btn-outline-primary custom-button" type="submit" name="submit" value="Submit">
      </div>
    </form>
  </div>

  <div class="container mt-5 result-container">
    <?php
    if (isset($_POST['submit'])) {
      $tes = $_POST['pilihan'];
      if ($tes == 0) {
        $question2 = $_POST['input2'];
        echo "<div class='result-heading'>Anda sedang merasa:</div>";
        echo "<div class='result-text'>$question2</div>";
        echo "<a href='https://www.roblox.com/games/13971774278/Emotional-Demage?AssetId=13971774278' class='result-link' target='_blank'>Klik di sini untuk mengatasi emosi Anda</a>";
      } elseif ($tes == 1) {
        $question3 = $_POST['input3'];
        echo "<div class='result-heading'>Anda sedang merasa:</div>";
        echo "<div class='result-text'>$question3</div>";
        echo "<a href='https://www.roblox.com/games/12211224713/Peace' class='result-link' target='_blank'>Klik di sini untuk mencapai ketenangan batin</a>";
      } else {
        echo '<p>Pilihan tidak valid.</p>';
      }
    }
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="style.js"></script>
</body>

</html>
