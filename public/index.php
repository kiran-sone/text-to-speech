<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Speech synthesiser</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- <link rel="stylesheet" href="style.css" /> -->

  <style type="text/css">
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #fafafa;
    }

    h1 {
      color: #333;
    }

    p {
      color: #666;
    }


    .container {
      width: 80%;
      margin: 0 auto;
    }

    .row {
      margin-bottom: 20px;
    }

    img {
      width: 125px;
      height: 125px;
      margin: 10px 0;
    }


    textarea {
      width: 100%;
      height: 300px;
      border: 1px solid #ccc;
    }

    .dgs-text{
      color: #337ab7;
    }

    @media only screen and (min-width: 992px) {
      /* Your styles for desktop screens */
      .mt-lg {
        margin-top: 20px;
      }
    }

    .ranges{
      display: inline-block;
      visibility: hidden;
    }

  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="https://dgsts.com/wp-content/uploads/2020/09/dgs-logo-web.svg" alt="Logo">
      </div>
      <div class="col-md-6 mt-lg">
        <form>
          <h1 class="dgs-text">Text to Speech Conversion</h1>
          <p class="dgs-text">Turn your text into audio with our text to speech tool</p>
          <p><strong>Enter your text below:</strong></p>
          <textarea id="txt" class="txt" cols="30" rows="20"></textarea>
          <input type="range" min="0.5" max="2" value="0.9" step="0.1" class="ranges" id="rate" />
          <input type="range" min="0" max="2" value="1" step="0.1" class="ranges" id="pitch" />
          <div class="rate-value ranges">1</div>
          <div class="pitch-value ranges">1</div>
          <div>Choose an accent:</div>
          <select></select>
          <div style="margin-top: 10px;"><button type="submit" id="play" class="btn btn-primary btn-sm">Convert</button> <button type="button" id="stopBtn" class="btn btn-warning btn-sm">Stop</button></div>
        </form>
      </div>
    </div>

  </div>

  <script src="script.js"></script>
</body>
</html>
