<!-- TODO -->
<!-- create PHP variables to store information in the form -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Light Mode Calculator</title>
  <style>
    /* Reset and Base Layout */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #f1f5f9;
      /* Soft, refreshing light gray background */
      padding: 20px;
    }

    /* Calculator Wrapper */
    .calc-body {
      background-color: #ffffff;
      /* Pure white card container */
      padding: 20px;
      border-radius: 20px;
      width: 100%;
      max-width: 480px;
      box-shadow: 0 15px 30px rgba(148, 163, 184, 0.15), 0 5px 15px rgba(148, 163, 184, 0.1);
    }

    /* The Grid Layout for Keys */
    .calc-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 12px;
      margin-bottom: 24px;
    }

    /* Base Button Styles */
    .btn {
      border: 1px solid #e2e8f0;
      /* Crisp light gray border */
      border-radius: 14px;
      height: 65px;
      font-size: 20px;
      font-weight: 600;
      cursor: pointer;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: all 0.15s ease;
    }

    .btn:active {
      transform: scale(0.96);
    }

    /* Number Buttons (Clean Off-White) */
    .btn-num {
      background-color: #f8fafc;
      color: #334155;
    }

    .btn-num:hover {
      background-color: #f1f5f9;
      border-color: #cbd5e1;
    }

    /* Operator Buttons (Bright Sky/Royal Blue Tint) */
    .btn-op {
      background-color: #eff6ff;
      color: #1d4ed8;
      border-color: #dbeafe;
      font-size: 24px;
    }

    .btn-op:hover {
      background-color: #dbeafe;
      color: #1e40af;
    }

    /* Clear Button (Soft Pastel Pink) */
    .btn-clear {
      background-color: #fef2f2;
      color: #991b1b;
      border-color: #fee2e2;
    }

    .btn-clear:hover {
      background-color: #fee2e2;
    }

    /* Equals Button (Vibrant Blueprint Blue) */
    .btn-equal {
      grid-column: span 4;
      background-color: #2563eb;
      color: #ffffff;
      border: none;
      height: 60px;
      font-size: 24px;
      box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
    }

    .btn-equal:hover {
      background-color: #1d4ed8;
      box-shadow: 0 6px 16px rgba(37, 99, 235, 0.3);
    }

    /* Result Section Styling */
    .result-section {
      border-top: 1px solid #f1f5f9;
      padding-top: 20px;
      text-align: center;
      background-color: #f8fafc;
      /* Inset effect for the result */
      border-radius: 12px;
      padding: 16px;
    }

    .result-label {
      color: #64748b;
      font-size: 13px;
      font-weight: 500;
      margin-bottom: 6px;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .result-value {
      color: #0f172a;
      font-size: 24px;
      font-weight: 700;
    }
  </style>
</head>

<body>

  <div class="calc-body">
    <div class="calc-grid">
      <button class="btn btn-num">7</button>
      <button class="btn btn-num">8</button>
      <button class="btn btn-num">9</button>
      <button class="btn btn-op">&divide;</button>

      <button class="btn btn-num">4</button>
      <button class="btn btn-num">5</button>
      <button class="btn btn-num">6</button>
      <button class="btn btn-op">&times;</button>

      <button class="btn btn-num">1</button>
      <button class="btn btn-num">2</button>
      <button class="btn btn-num">3</button>
      <button class="btn btn-op">&minus;</button>

      <button class="btn btn-num">0</button>
      <button class="btn btn-num">.</button>
      <button class="btn btn-clear">C</button>
      <button class="btn btn-op">+</button>

      <button class="btn btn-equal">=</button>
    </div>

    <div class="result-section">
      <div class="result-label">Result</div>
      <div class="result-value">0</div>
    </div>
  </div>

</body>

</html>