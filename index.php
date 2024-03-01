<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body style="background-color: #333;">
  <div class="navdiv">
    <nav>
      <div class="sidebar-top">
        <a href="#" class="logo__wrapper">
          <img src="assets/logo.png" alt="Logo" class="logo">
          <img src="assets/logo-small.png" alt="Logo" class="logo-small">
        </a>
      </div>
      <div class="sidebar-links">
        <ul>
          <li>
            <div class="accordion-container">
              <div class="main-item">
                </svg>
                <a href="#home" title="Home" class="tooltip">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                    <path d="M10 12h4v4h-4z"></path>
                  </svg>
                  <span class="link hide">Buttons</span>
                  <span class="tooltip__content">Home</span>
                </a>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 6l6 6l-6 6" />
                </svg>
              </div>
              <ul>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="javascript:void(0)" onclick="document.getElementById('iframeId').src = 'archive/buttons/buttons-01/index.html';
                    downloadXpath='downloadFolder/buttons/buttons-01.rar'">
                    Button 1
                  </a>
                </li>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="javascript:void(0)" onclick="document.getElementById('iframeId').src = 'archive/buttons/buttons-02/index.html';
                    downloadXpath='downloadFolder/buttons/buttons-02.rar'">
                    Button 2
                  </a>
                </li>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="javascript:void(0)" onclick="document.getElementById('iframeId').src = 'archive/buttons/buttons-03/index.html';
                    downloadXpath='downloadFolder/buttons/buttons-03.rar'">
                    Button 3
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <div class="accordion-container">
              <div class="main-item">
                </svg>
                <a href="#portfolio" title="Portfolio" class="tooltip">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-dashboard"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M4 4h6v8h-6z"></path>
                    <path d="M4 16h6v4h-6z"></path>
                    <path d="M14 12h6v8h-6z"></path>
                    <path d="M14 4h6v4h-6z"></path>
                  </svg>
                  <span class="link hide">Cards</span>
                  <span class="tooltip__content">Portfolio</span>
                </a>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 6l6 6l-6 6" />
                </svg>
              </div>
              <ul>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="javascript:void(0)" onclick="document.getElementById('iframeId').src = 'archive/cards/cards-01/cards.html';
                    downloadXpath='downloadFolder/cards/cards-01.rar'">
                    Card 1
                  </a>
                </li>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="javascript:void(0)" onclick="document.getElementById('iframeId').src = 'archive/cards/cards-02/cards.html';
                    downloadXpath='downloadFolder/cards/cards-02.rar'">
                    Card 2
                  </a>
                </li>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="javascript:void(0)" onclick="document.getElementById('iframeId').src = 'archive/cards/cards-03/index.html';
                    downloadXpath='downloadFolder/cards/cards-03.rar'">
                    Card 3
                  </a>
                </li>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="javascript:void(0)" onclick="document.getElementById('iframeId').src = 'archive/cards/cards-04/index.html';
                    downloadXpath='downloadFolder/cards/cards-04.rar'">
                    Card 4
                  </a>
                </li>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="javascript:void(0)" onclick="document.getElementById('iframeId').src = 'archive/cards/cards-05/index.html';
                    downloadXpath='downloadFolder/cards/cards-04.rar'">
                    Card 5
                  </a>
                </li>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="javascript:void(0)" onclick="document.getElementById('iframeId').src = 'archive/cards/cards-07/index.html';
                    downloadXpath='downloadFolder/cards/cards-05.rar'">
                    Card 6
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <div class="accordion-container">
              <div class="main-item">
                </svg>
                <a href="#watchlist" title="Watchlist" class="tooltip">

                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                      d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                    </path>
                  </svg>
                  <span class="link hide">Accordion</span>
                  <span class="tooltip__content">Watchlist</span>
                </a>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 6l6 6l-6 6" />
                </svg>
              </div>
              <ul>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="javascript:void(0)" onclick="document.getElementById('iframeId').src = 'archive/accordions/accordion-01/index.html';
                    downloadXpath='downloadFolder/accordions/accordion-01.rar'">
                    Accordion 1
                  </a>
                </li>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="javascript:void(0)" onclick="document.getElementById('iframeId').src = 'archive/accordions/accordion-02/index.html';
                    downloadXpath='downloadFolder/accordions/accordion-02.rar'">
                    Accordion 2
                  </a>
                </li>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="javascript:void(0)" onclick="document.getElementById('iframeId').src = 'archive/accordions/accordion-03/index.html';
                    downloadXpath='downloadFolder/accordions/accordion-03.rar'">
                    Accordion 3
                  </a>
                </li>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="javascript:void(0)" onclick="document.getElementById('iframeId').src = 'archive/accordions/accordion-04/index.html';
                    downloadXpath='downloadFolder/accordions/accordion-04.rar'">
                    Accordion 4
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <div class="accordion-container">
              <div class="main-item">
                </svg>
                <a href="#explore" title="Explore" class="tooltip">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M8 16l2 -6l6 -2l-2 6l-6 2"></path>
                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                  </svg>
                  <span class="link hide">Animation</span>
                  <span class="tooltip__content">Explore</span>
                </a>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 6l6 6l-6 6" />
                </svg>
              </div>
              <ul>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="javascript:void(0)" onclick="document.getElementById('iframeId').src = 'archive/animations/animation-01/index.html';
                    downloadXpath='downloadFolder/animations/animation-01.rar'">
                    Animation 1
                  </a>
                </li>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="javascript:void(0)" onclick="document.getElementById('iframeId').src = 'archive/animations/animation-02/index.html';
                    downloadXpath='downloadFolder/animations/animation-02.rar'">
                    Animation 2
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <div class="accordion-container">
              <div class="main-item">
                </svg>
                <a href="#analytics" title="Analytics" class="tooltip">
                  <div style="position: relative;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-graph" width="24"
                      height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M4 18v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
                      <path d="M7 14l3 -3l2 2l3 -3l2 2"></path>
                    </svg>
                    <div class="notification"></div>
                  </div>
                  <span class="link hide">Dropdown Menus</span>
                  <span class="tooltip__content">Analytics</span>
                </a>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 6l6 6l-6 6" />
                </svg>
              </div>
              <ul>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="javascript:void(0)"
                    onclick="document.getElementById('iframeId').src = 'archive/dropdowns/dropdown-menu-01/index.html';">
                    Dropdown 1
                  </a>
                </li>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="javascript:void(0)"
                    onclick="document.getElementById('iframeId').src = 'archive/dropdowns/dropdown-menu-02/index.html';">
                    Dropdown 2
                  </a>
                </li>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="javascript:void(0)"
                    onclick="document.getElementById('iframeId').src = 'archive/dropdowns/dropdown-menu-03/index.html';">
                    Dropdown 3
                  </a>
                </li>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="javascript:void(0)"
                    onclick="document.getElementById('iframeId').src = 'archive/dropdowns/dropdown-menu-04/index.html';">
                    Dropdown 4
                  </a>
                </li>
              </ul>
            </div>

          </li>
          <li>
            <div class="accordion-container">
              <div class="main-item">
                </svg>
                <a href="#reports" title="Reports" class="tooltip">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-description"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                    <path d="M9 17h6"></path>
                    <path d="M9 13h6"></path>
                  </svg>
                  <span class="link hide">Reports</span>
                  <span class="tooltip__content">Reports</span>
                </a>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 6l6 6l-6 6" />
                </svg>
              </div>
              <ul>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="#income" title="Income">
                    Income
                  </a>
                </li>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="#expenses" title="Expense">
                    Expenses
                  </a>
                </li>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="#statements" title="Statements">
                    Statements
                  </a>
                </li>
                <li>
                  <div class="line-vertical"></div>
                  <div class="line-horizontal"></div>
                  <a href="#payouts" title="Payouts">
                    Payouts
                  </a>
                </li>
              </ul>
            </div>

          </li>
        </ul>
      </div>
      <div class="sidebar-bottom hide">
        <img src="assets/diamond.png" alt="Diamond">
        <p>
          Click to add your project
        </p>
        <button id="addFileCard">
          Explore Benefits
        </button>
      </div>
      <div class="expand-btn" style="display: none;">
        <img src="assets/right-collapse.svg" alt="Left Collapse">
        <span class="hide">
          Collapse
        </span>
      </div>
    </nav>
  </div>

  <!--******************************************-->
  <div class="right">
    <iframe id="iframeId" frameBorder="0"
      allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
    <div class="downloadDiv">
      <a class="button" href="#" id="downloadLink" title="Learn more about web development">
        <svg height="60" width="300">
          <rect class="shape" height="60" width="300" />
          <div class="text"><span class="material-symbols-outlined" style="font-size:30px;">
              download
            </span></div>
        </svg>
      </a>
    </div>
  </div>
  <!--******************************************-->
  <div class="positionMiddleDiv" id="positionMiddleDiv">
    <div class="positionMiddleDiv_header">
      <h1 style="font-size: 1.2rem; padding: 15px 0 0 10px; color: white;">Dosya Yükleme Ekranı
      </h1>
      <button type="button" id="closeforms"><span class="material-symbols-outlined">close</span></button>
      <div class="dropzone-sol">
        <form name="yukleme" class="dropzone-box" action="upload.php" method="post" enctype="multipart/form-data">
          <h2>Upload and attach files</h2>
          <p>
            Attach files to this project
          </p>
          <div class="dropzone-area">
            <div class="file-upload-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
              </svg>
            </div>
            <p>Click to upload or drag and drop</p>
            <input type="file" required id="upload-file" name="dosya">
            <p class="message">No Files Selected</p>
          </div>
          <div class="dropzone-actions">
            <button type="reset" id="channeluploadButton">
                Cancel
            </button>
            <button id="submit-button" type="submit">
                Save
            </button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>
