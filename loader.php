<style>

        .loader { display: flex;
            z-index: 99999;
            justify-content: center; align-items:center;
            flex-direction: column;
            position: fixed; top:0; left:0; width:100vw; height:100vh;
            background:#c32149;
            pointer-events: none;
            }
            
            .loader img { 
                width:200px;
                -webkit-filter: brightness(100);
                filter: brightness(100);
            }
            
            .loader-bars {
              display: inline-block;
              position: relative;
              width: 80px;
              height: 80px;
            }
            
            .loader-bars div {
              display: inline-block;
              position: absolute;
              left: 8px;
              width: 16px;
              background: #fff;
              animation: loader-bars 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
            }
            .loader-bars div:nth-child(1) {
              left: 8px;
              animation-delay: -0.24s;
            }
            .loader-bars div:nth-child(2) {
              left: 32px;
              animation-delay: -0.12s;
            }
            .loader-bars div:nth-child(3) {
              left: 56px;
              animation-delay: 0;
            }
            @keyframes loader-bars {
              0% {
                top: 8px;
                height: 64px;
              }
              50%, 100% {
                top: 24px;
                height: 32px;
              }
            }
        </style>

<div class="loader" id="loader">
        <img src="https://www.leewalpole.co.uk/sites/inbodyzone/img/inbody-zone-bali-logo.png" alt="Logo">
        <div class="loader-bars">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <script>
        //For Live Projects
        window.addEventListener('load', function () {
            document.querySelector('body').classList.add("loaded")
        });
    </script>