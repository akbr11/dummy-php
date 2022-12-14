<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Layout</title>

  <style>
    .countdown {
      text-align: center;
      margin: 25px 0 5px 0;
    }

    .countdown ul {
      list-style: none;
      padding: 0px;
      margin: 0px;
    }

    .countdown ul li {
      display: inline-block;
      background-color: #200064;
      color: #ffffff;
      width: 30px;
      height: 30px;
      margin-bottom: 5px;
      margin-right: 5px;
      padding-top: 2px;
      border-radius: 100%;
    }

    .countdown ul li.active {
      background-color: #008000;
      color: #ffffff;
      border: 1px dashed #ffffff;
    }

    .logo-name {
      text-align: center;
      font-size: 30px;
      color: #000000;
      font-family: 'Proza Libre', sans-serif;
    }

    .custom-block {
      margin: 20px 0;
      color: #000000;
    }

    .custom-box {
      margin-bottom: 50px;
      background-color: #ffffff;
      border-radius: 20px;
      box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;
      padding: 30px;
      text-align: center;
      margin-top: 50px;
      border: #008000 solid 5px;
    }

    .custom-box h2 {
      color: #000000;
    }

    .skipBtnWrapper {
      padding: 10px;
      margin: 0;
      text-align: center;
    }

    .cusBtn {
      background: #fc4d21;
      color: #fff !important;
      display: inline-block;
      font-size: 15px;
      font-weight: 500;
      height: 0;
      line-height: 0;
      padding: 18px 30px;
      text-transform: capitalize;
      border-radius: 1px;
      letter-spacing: .5px;
      border: 0 !important;
      cursor: pointer;
      border-radius: 100px;
    }

    .question-text {
      font-size: 20px;
      text-align: center;
      margin: 30px 0;
      color: #000000;
    }

    .custom-card {
      position: relative;
      width: 100%;
      background-color: #ffffff;
      border-radius: 20px;
      box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16), 0px 3px 6px rgba(0, 0, 0, 0.23);
      text-align: center;
      cursor: pointer;
    }

    .custom-card.active {
      background-color: #008000;
    }

    .custom-card .q-img {
      position: relative;
      width: 100%;
      padding: 15px;
    }

    .custom-card .q-img img {
      max-width: 100%;
      height: auto;
      border-radius: 100%;
      border: 1px solid #200064;
      padding: 5px;
    }

    .custom-card .custom-card-body {
      background-color: #200064;
      border-bottom-left-radius: 4px;
      border-bottom-right-radius: 4px;
      padding-top: 10px;
      padding-bottom: 5px;
    }

    .custom-card .custom-card-body .question-option {
      font-size: 20px;
      color: #fff;
    }

    textarea {
      resize: none;
    }

    .wrap {
      width: 100%;
      position: relative;
    }

    .toggle-btn {
      width: 22px;
      height: 22px;
      /* position: absolute; */
    }

    .toggle-right {
      margin-right: 10px;
    }

    .toggle-left {
      margin-left: 10px;
    }

    .rounded-checkbox {
      width: 35px;
      height: 30px;
      border-radius: 50%;
      vertical-align: middle;
      border: 1px solid black;
      appearance: none;
      -webkit-appearance: none;
      outline: none;
      cursor: pointer;
    }

    .rounded-checkbox:checked {
      appearance: auto;
      clip-path: circle(50% at 50% 50%);
      background-color: blue;
    }

    .form-control {
      border-radius: 15px;
      border: black solid 1px;
    }

    .color {
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="top-gap">
    <div class="container">
      <div class="row vh-100 mx-auto">
        <div class="row justify-content-center">
          <div class="col-sm-12 col-md-6 col-lg-6 my-auto">
            <div class="card custom-box">
              <div class="card-body">
                <h1 class="logo-name"><b>Dare Quiz</b></h1>
                <div class="custom-block quiz-wrapper">
                  <div class="countdown">
                    <ul>
                      <li class="active">1</li>
                      <li>2</li>
                      <li>3</li>
                      <li>4</li>
                      <li>5</li>
                      <li>6</li>
                      <li>7</li>
                      <li>8</li>
                      <li>9</li>
                      <li>10</li>
                      <li>11</li>
                      <li>12</li>
                      <li>13</li>
                      <li>14</li>
                      <li>15</li>
                    </ul>
                  </div>
                  <div class="skipBtnWrapper">
                    <a href="#" class="cusBtn">Skip this question</a>
                  </div>
                </div>
              </div>
              <div class="question-wrapper">
                <div class="wrap">
                  <textarea class="form-control" rows="3" maxlength="160" minlength="1">Question</textarea>
                </div>
                <div class="row mt-3">
                  <div class="col-md-12 mb-3 qns d-flex">
                    <input type="checkbox" class="rounded-checkbox toggle-right my-auto" id="checkbox" />
                    <label for="checkbox"></label>
                    <textarea class="form-control" rows="2" maxlength="80" minlength="1">Answer</textarea>
                    <input type="button" class="btn btn-danger rounded-circle toggle-left my-auto" value="X" onclick="remove(this)">
                  </div>
                  <div class="obj"></div>
                </div>
                <div class="mt-2">
                  <button type="button" class="btn btn-warning rounded" onclick="add()">Add Option</button>
                  <div class="d-flex justify-content-center mt-3 countdown">
                    <div class="mx-1">
                      <div class="color" style="background-color: rgb(200, 45, 68); height: 34px; width: 34px; border-radius: 100px;"></div>
                    </div>
                    <div class="mx-1">
                      <div class="color" style="background-color: rgb(239, 70, 70); height: 34px; width: 34px; border-radius: 100px;"></div>
                    </div>
                    <div class="mx-1">
                      <div class="color" style="background-color: rgb(255, 161, 0); height: 34px; width: 34px; border-radius: 100px;"></div>
                    </div>
                    <div class="mx-1">
                      <div class="color" style="background-color: rgb(9, 177, 74); height: 34px; width: 34px; border-radius: 100px;"></div>
                    </div>
                    <div class="mx-1">
                      <div class="color" style="background-color: rgb(32, 183, 255); height: 34px; width: 34px; border-radius: 100px;"></div>
                    </div>
                    <div class="mx-1">
                      <div class="color" style="background-color: rgb(86, 126, 255); height: 34px; width: 34px; border-radius: 100px;"></div>
                    </div>
                    <div class="mx-1">
                      <div class="color" style="background-color: rgb(197, 108, 240); height: 34px; width: 34px; border-radius: 100px;"></div>
                    </div>
                    <div class="mx-1">
                      <div class="color" style="background-color: rgb(87, 96, 111); height: 34px; width: 34px; border-radius: 100px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script>
    const result = document.querySelector('.obj');
    const textBox = "";

    function add() {
      const div = document.createElement('div');
      div.setAttribute("class", "col-md-12 mb-3 qns d-flex");

      var textBox =
        '<input type="checkbox" class="rounded-checkbox toggle-right my-auto" id="checkbox"/><label for="checkbox"></label><textarea class="form-control" rows="2" maxlength="80" minlength="1">Answer</textarea><input type="button" class="toggle-left my-auto btn btn-danger rounded-circle" value="X" onclick="remove(this)">';

      div.innerHTML = textBox;

      result.appendChild(div);
    }

    function remove(ele) {
      console.log();
      ele.parentNode.remove();
    }

    const btnColor = document.querySelector('.color');
    const borderColor = document.querySelector('.custom-box');

    btnColor.addEventListener('click', function() {
      borderColor.style.border = 'black';
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>