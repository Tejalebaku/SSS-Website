<!DOCTYPE html>
<html>
<head>
<style>
  .header {
    background-color: #333;
    color: #fff;
    padding: 10px;
  }

  .services-container {
    display: flex;
    justify-content: space-between;
  }

  .left-section {
    flex: 1;
    padding: 20px;
  }

  .right-section {
    flex: 2;
    padding: 20px;
  }

  .service-box {
    background-color: #f2f2f2;
    border: 2px solid #333;
    padding: 10px;
    margin-bottom: 20px;
  }

  .image-upload-box {
    border: 2px solid #333;
    padding: 20px;
    text-align: center;
  }

  .image-upload-box input {
    display: block;
    margin: 0 auto;
  }

  .service-list {
    list-style-type: none;
    padding: 0;
  }

  .service-list li {
    margin-bottom: 10px;
  }
</style>
</head>
<body>
  <div class="header">
    <h1>Small Scale Services</h1>
  </div>

  <div class="services-container">
    <div class="left-section">
      <div class="service-box">
        <h2>Services:</h2>
        <ul class="service-list">
          <li>Service Name 1</li>
          <li>Service Name 2</li>
          <li>Service Name 3</li>
          <li>Service Name 4</li>
          <li>Service Name 5</li>
        </ul>
      </div>
    </div>
    <div class="right-section">
      <div class="image-upload-box">
        <h2>Upload Image</h2>
        <input type="file" id="image-upload" name="image-upload">
      </div>
    </div>
  </div>
</body>
</html>
