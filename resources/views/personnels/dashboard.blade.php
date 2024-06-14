<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
            .imageDeFont {
            width: 100%;
            height: 250px;
    margin: 0px;
    background-image: url({{ asset('images/fondDePage.png') }});
    background-repeat: no-repeat; /* Prevent repeating the image */
    background-size: cover; /* Ensure the image covers the entire area */
    position: relative; /* Enable positioning of child elements */
}
</style>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <img src="{{ asset('images/logo.png') }}" alt="logo_simplon">
        <div class="titre"><h2>Bienvenue sur Simplon Sénégal Formation </h2></div>
        <svg xmlns="http://www.w3.org/2000/svg" width="85" height="78" viewBox="0 0 85 78" fill="none">
                <rect width="85" height="78" rx="20" fill="white"/>
                <mask id="mask0_9_50" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="20" y="17" width="45" height="45">
                    <rect x="20" y="17" width="45" height="45" fill="#D9D9D9"/>
                </mask>
                <g mask="url(#mask0_9_50)">
                    <path d="M40.625 35.2264H44.375V32.1885H48.125V29.1506H44.375V26.1128H40.625V29.1506H36.875V32.1885H40.625V35.2264ZM27.5 41.3021V38.2643H31.25V27.6317C31.25 25.5305 32.0312 23.6635 33.5938 22.0306C35.1562 20.3978 37.1875 19.3282 39.6875 18.8219V17.7586C39.6875 17.1257 39.9609 16.5878 40.5078 16.1448C41.0547 15.7017 41.7188 15.4802 42.5 15.4802C43.2812 15.4802 43.9453 15.7017 44.4922 16.1448C45.0391 16.5878 45.3125 17.1257 45.3125 17.7586V18.8219C47.8125 19.3282 49.8438 20.3978 51.4062 22.0306C52.9688 23.6635 53.75 25.5305 53.75 27.6317V38.2643H57.5V41.3021H27.5ZM42.5 45.8589C41.4688 45.8589 40.5859 45.5615 39.8516 44.9666C39.1172 44.3716 38.75 43.6565 38.75 42.8211H46.25C46.25 43.6565 45.8828 44.3716 45.1484 44.9666C44.4141 45.5615 43.5312 45.8589 42.5 45.8589ZM35 38.2643H50V27.6317C50 25.9609 49.2656 24.5305 47.7969 23.3407C46.3281 22.1509 44.5625 21.556 42.5 21.556C40.4375 21.556 38.6719 22.1509 37.2031 23.3407C35.7344 24.5305 35 25.9609 35 27.6317V38.2643Z" fill="#1C1B1F"/>
                </g>
        </svg>
    </nav>
    
    <div class="corp-page">
        <div class="side-bar">
            <div class="user-info">
                <img src="{{ asset('images/logo.png') }}" alt="image-personnel">
                <h3>
                    <span>Bonjour </span>
                    <span>Bienvenue sur Simplon Sénégal</span>
                </h3>
            </div>
            <div class="navigation-btn">
              <a href="#">
              <div class="btn-navigate">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <mask id="mask0_9_39" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="40"><rect width="40" height="40" fill="#D9D9D9"/></mask>
                            <g mask="url(#mask0_9_39)"><path d="M10 33.3334C9.08334 33.3334 8.29862 33.007 7.64584 32.3542C6.99306 31.7014 6.66667 30.9167 6.66667 30C6.66667 29.0834 6.99306 28.2986 7.64584 27.6459C8.29862 26.9931 9.08334 26.6667 10 26.6667C10.9167 26.6667 11.7014 26.9931 12.3542 27.6459C13.0069 28.2986 13.3333 29.0834 13.3333 30C13.3333 30.9167 13.0069 31.7014 12.3542 32.3542C11.7014 33.007 10.9167 33.3334 10 33.3334ZM20 33.3334C19.0833 33.3334 18.2986 33.007 17.6458 32.3542C16.9931 31.7014 16.6667 30.9167 16.6667 30C16.6667 29.0834 16.9931 28.2986 17.6458 27.6459C18.2986 26.9931 19.0833 26.6667 20 26.6667C20.9167 26.6667 21.7014 26.9931 22.3542 27.6459C23.007 28.2986 23.3333 29.0834 23.3333 30C23.3333 30.9167 23.007 31.7014 22.3542 32.3542C21.7014 33.007 20.9167 33.3334 20 33.3334ZM30 33.3334C29.0833 33.3334 28.2986 33.007 27.6458 32.3542C26.9931 31.7014 26.6667 30.9167 26.6667 30C26.6667 29.0834 26.9931 28.2986 27.6458 27.6459C28.2986 26.9931 29.0833 26.6667 30 26.6667C30.9167 26.6667 31.7014 26.9931 32.3542 27.6459C33.007 28.2986 33.3333 29.0834 33.3333 30C33.3333 30.9167 33.007 31.7014 32.3542 32.3542C31.7014 33.007 30.9167 33.3334 30 33.3334ZM10 23.3334C9.08334 23.3334 8.29862 23.007 7.64584 22.3542C6.99306 21.7014 6.66667 20.9167 6.66667 20C6.66667 19.0834 6.99306 18.2986 7.64584 17.6459C8.29862 16.9931 9.08334 16.6667 10 16.6667C10.9167 16.6667 11.7014 16.9931 12.3542 17.6459C13.0069 18.2986 13.3333 19.0834 13.3333 20C13.3333 20.9167 13.0069 21.7014 12.3542 22.3542C11.7014 23.007 10.9167 23.3334 10 23.3334ZM20 23.3334C19.0833 23.3334 18.2986 23.007 17.6458 22.3542C16.9931 21.7014 16.6667 20.9167 16.6667 20C16.6667 19.0834 16.9931 18.2986 17.6458 17.6459C18.2986 16.9931 19.0833 16.6667 20 16.6667C20.9167 16.6667 21.7014 16.9931 22.3542 17.6459C23.007 18.2986 23.3333 19.0834 23.3333 20C23.3333 20.9167 23.007 21.7014 22.3542 22.3542C21.7014 23.007 20.9167 23.3334 20 23.3334ZM30 23.3334C29.0833 23.3334 28.2986 23.007 27.6458 22.3542C26.9931 21.7014 26.6667 20.9167 26.6667 20C26.6667 19.0834 26.9931 18.2986 27.6458 17.6459C28.2986 16.9931 29.0833 16.6667 30 16.6667C30.9167 16.6667 31.7014 16.9931 32.3542 17.6459C33.007 18.2986 33.3333 19.0834 33.3333 20C33.3333 20.9167 33.007 21.7014 32.3542 22.3542C31.7014 23.007 30.9167 23.3334 30 23.3334ZM10 13.3334C9.08334 13.3334 8.29862 13.007 7.64584 12.3542C6.99306 11.7014 6.66667 10.9167 6.66667 10C6.66667 9.08335 6.99306 8.29863 7.64584 7.64585C8.29862 6.99308 9.08334 6.66669 10 6.66669C10.9167 6.66669 11.7014 6.99308 12.3542 7.64585C13.0069 8.29863 13.3333 9.08335 13.3333 10C13.3333 10.9167 13.0069 11.7014 12.3542 12.3542C11.7014 13.007 10.9167 13.3334 10 13.3334ZM20 13.3334C19.0833 13.3334 18.2986 13.007 17.6458 12.3542C16.9931 11.7014 16.6667 10.9167 16.6667 10C16.6667 9.08335 16.9931 8.29863 17.6458 7.64585C18.2986 6.99308 19.0833 6.66669 20 6.66669C20.9167 6.66669 21.7014 6.99308 22.3542 7.64585C23.007 8.29863 23.3333 9.08335 23.3333 10C23.3333 10.9167 23.007 11.7014 22.3542 12.3542C21.7014 13.007 20.9167 13.3334 20 13.3334ZM30 13.3334C29.0833 13.3334 28.2986 13.007 27.6458 12.3542C26.9931 11.7014 26.6667 10.9167 26.6667 10C26.6667 9.08335 26.9931 8.29863 27.6458 7.64585C28.2986 6.99308 29.0833 6.66669 30 6.66669C30.9167 6.66669 31.7014 6.99308 32.3542 7.64585C33.007 8.29863 33.3333 9.08335 33.3333 10C33.3333 10.9167 33.007 11.7014 32.3542 12.3542C31.7014 13.007 30.9167 13.3334 30 13.3334Z" fill="#CE0033"/></g>
                    </svg>
                    <h2>Gestion des Candidatures </h2>
                </div>
              </a>
               <a href="/gestionFomation">
               <div class="btn-navigate">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <mask id="mask0_9_27" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="40">
                        <rect width="40" height="40" fill="#D9D9D9"/>
                    </mask>
                    <g mask="url(#mask0_9_27)">
                        <path d="M20 35L8.33334 28.6667V18.6667L1.66667 15L20 5L38.3333 15V28.3333H35V16.8333L31.6667 18.6667V28.6667L20 35ZM20 21.1667L31.4167 15L20 8.83333L8.58334 15L20 21.1667ZM20 31.2083L28.3333 26.7083V20.4167L20 25L11.6667 20.4167V26.7083L20 31.2083Z" fill="#CE0033"/>
                    </g>
                    </svg>
                    <h2>Gestion des Formations</h2>
                </div>
               </a>
                <a href="#"><div class="btn-navigate">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <mask id="mask0_9_21" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="40">
                        <rect width="40" height="40" fill="#D9D9D9"/>
                    </mask>
                    <g mask="url(#mask0_9_21)">
                        <path d="M9.74992 28.4997C11.1666 27.4163 12.7499 26.5622 14.4999 25.9372C16.2499 25.3122 18.0833 24.9997 19.9999 24.9997C21.9166 24.9997 23.7499 25.3122 25.4999 25.9372C27.2499 26.5622 28.8333 27.4163 30.2499 28.4997C31.2221 27.3608 31.9791 26.0691 32.5208 24.6247C33.0624 23.1802 33.3333 21.6386 33.3333 19.9997C33.3333 16.3052 32.0346 13.1594 29.4374 10.5622C26.8402 7.96495 23.6944 6.66634 19.9999 6.66634C16.3055 6.66634 13.1596 7.96495 10.5624 10.5622C7.9652 13.1594 6.66659 16.3052 6.66659 19.9997C6.66659 21.6386 6.93742 23.1802 7.47909 24.6247C8.02075 26.0691 8.7777 27.3608 9.74992 28.4997ZM19.9999 21.6663C18.361 21.6663 16.9791 21.1038 15.8541 19.9788C14.7291 18.8538 14.1666 17.4719 14.1666 15.833C14.1666 14.1941 14.7291 12.8122 15.8541 11.6872C16.9791 10.5622 18.361 9.99968 19.9999 9.99968C21.6388 9.99968 23.0208 10.5622 24.1458 11.6872C25.2708 12.8122 25.8333 14.1941 25.8333 15.833C25.8333 17.4719 25.2708 18.8538 24.1458 19.9788C23.0208 21.1038 21.6388 21.6663 19.9999 21.6663ZM19.9999 36.6663C17.6944 36.6663 15.5277 36.2288 13.4999 35.3538C11.4721 34.4788 9.70825 33.2913 8.20825 31.7913C6.70825 30.2913 5.52075 28.5275 4.64575 26.4997C3.77075 24.4719 3.33325 22.3052 3.33325 19.9997C3.33325 17.6941 3.77075 15.5275 4.64575 13.4997C5.52075 11.4719 6.70825 9.70801 8.20825 8.20801C9.70825 6.70801 11.4721 5.52051 13.4999 4.64551C15.5277 3.77051 17.6944 3.33301 19.9999 3.33301C22.3055 3.33301 24.4721 3.77051 26.4999 4.64551C28.5277 5.52051 30.2916 6.70801 31.7916 8.20801C33.2916 9.70801 34.4791 11.4719 35.3541 13.4997C36.2291 15.5275 36.6666 17.6941 36.6666 19.9997C36.6666 22.3052 36.2291 24.4719 35.3541 26.4997C34.4791 28.5275 33.2916 30.2913 31.7916 31.7913C30.2916 33.2913 28.5277 34.4788 26.4999 35.3538C24.4721 36.2288 22.3055 36.6663 19.9999 36.6663ZM19.9999 33.333C21.4721 33.333 22.861 33.1177 24.1666 32.6872C25.4721 32.2566 26.6666 31.6386 27.7499 30.833C26.6666 30.0275 25.4721 29.4094 24.1666 28.9788C22.861 28.5483 21.4721 28.333 19.9999 28.333C18.5277 28.333 17.1388 28.5483 15.8333 28.9788C14.5277 29.4094 13.3333 30.0275 12.2499 30.833C13.3333 31.6386 14.5277 32.2566 15.8333 32.6872C17.1388 33.1177 18.5277 33.333 19.9999 33.333ZM19.9999 18.333C20.7221 18.333 21.3194 18.0969 21.7916 17.6247C22.2638 17.1525 22.4999 16.5552 22.4999 15.833C22.4999 15.1108 22.2638 14.5136 21.7916 14.0413C21.3194 13.5691 20.7221 13.333 19.9999 13.333C19.2777 13.333 18.6805 13.5691 18.2083 14.0413C17.736 14.5136 17.4999 15.1108 17.4999 15.833C17.4999 16.5552 17.736 17.1525 18.2083 17.6247C18.6805 18.0969 19.2777 18.333 19.9999 18.333Z" fill="#CE0033"/>
                    </g>
                    </svg>
                    <h2>Candidats </h2>
                </div></a>
                <a href="#">
                <div class="btn-navigate">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <mask id="mask0_9_21" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="40">
                        <rect width="40" height="40" fill="#D9D9D9"/>
                    </mask>
                    <g mask="url(#mask0_9_21)">
                        <path d="M9.74992 28.4997C11.1666 27.4163 12.7499 26.5622 14.4999 25.9372C16.2499 25.3122 18.0833 24.9997 19.9999 24.9997C21.9166 24.9997 23.7499 25.3122 25.4999 25.9372C27.2499 26.5622 28.8333 27.4163 30.2499 28.4997C31.2221 27.3608 31.9791 26.0691 32.5208 24.6247C33.0624 23.1802 33.3333 21.6386 33.3333 19.9997C33.3333 16.3052 32.0346 13.1594 29.4374 10.5622C26.8402 7.96495 23.6944 6.66634 19.9999 6.66634C16.3055 6.66634 13.1596 7.96495 10.5624 10.5622C7.9652 13.1594 6.66659 16.3052 6.66659 19.9997C6.66659 21.6386 6.93742 23.1802 7.47909 24.6247C8.02075 26.0691 8.7777 27.3608 9.74992 28.4997ZM19.9999 21.6663C18.361 21.6663 16.9791 21.1038 15.8541 19.9788C14.7291 18.8538 14.1666 17.4719 14.1666 15.833C14.1666 14.1941 14.7291 12.8122 15.8541 11.6872C16.9791 10.5622 18.361 9.99968 19.9999 9.99968C21.6388 9.99968 23.0208 10.5622 24.1458 11.6872C25.2708 12.8122 25.8333 14.1941 25.8333 15.833C25.8333 17.4719 25.2708 18.8538 24.1458 19.9788C23.0208 21.1038 21.6388 21.6663 19.9999 21.6663ZM19.9999 36.6663C17.6944 36.6663 15.5277 36.2288 13.4999 35.3538C11.4721 34.4788 9.70825 33.2913 8.20825 31.7913C6.70825 30.2913 5.52075 28.5275 4.64575 26.4997C3.77075 24.4719 3.33325 22.3052 3.33325 19.9997C3.33325 17.6941 3.77075 15.5275 4.64575 13.4997C5.52075 11.4719 6.70825 9.70801 8.20825 8.20801C9.70825 6.70801 11.4721 5.52051 13.4999 4.64551C15.5277 3.77051 17.6944 3.33301 19.9999 3.33301C22.3055 3.33301 24.4721 3.77051 26.4999 4.64551C28.5277 5.52051 30.2916 6.70801 31.7916 8.20801C33.2916 9.70801 34.4791 11.4719 35.3541 13.4997C36.2291 15.5275 36.6666 17.6941 36.6666 19.9997C36.6666 22.3052 36.2291 24.4719 35.3541 26.4997C34.4791 28.5275 33.2916 30.2913 31.7916 31.7913C30.2916 33.2913 28.5277 34.4788 26.4999 35.3538C24.4721 36.2288 22.3055 36.6663 19.9999 36.6663ZM19.9999 33.333C21.4721 33.333 22.861 33.1177 24.1666 32.6872C25.4721 32.2566 26.6666 31.6386 27.7499 30.833C26.6666 30.0275 25.4721 29.4094 24.1666 28.9788C22.861 28.5483 21.4721 28.333 19.9999 28.333C18.5277 28.333 17.1388 28.5483 15.8333 28.9788C14.5277 29.4094 13.3333 30.0275 12.2499 30.833C13.3333 31.6386 14.5277 32.2566 15.8333 32.6872C17.1388 33.1177 18.5277 33.333 19.9999 33.333ZM19.9999 18.333C20.7221 18.333 21.3194 18.0969 21.7916 17.6247C22.2638 17.1525 22.4999 16.5552 22.4999 15.833C22.4999 15.1108 22.2638 14.5136 21.7916 14.0413C21.3194 13.5691 20.7221 13.333 19.9999 13.333C19.2777 13.333 18.6805 13.5691 18.2083 14.0413C17.736 14.5136 17.4999 15.1108 17.4999 15.833C17.4999 16.5552 17.736 17.1525 18.2083 17.6247C18.6805 18.0969 19.2777 18.333 19.9999 18.333Z" fill="#CE0033"/>
                    </g>
                </svg>
                        <h2>Candidats sélectionner </h2>
                    </div>
                </a>
                    <a href=#">
                    <div class="btn-navigate">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <mask id="mask0_9_27" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="40">
                                <rect width="40" height="40" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_9_27)">
                                <path d="M20 35L8.33334 28.6667V18.6667L1.66667 15L20 5L38.3333 15V28.3333H35V16.8333L31.6667 18.6667V28.6667L20 35ZM20 21.1667L31.4167 15L20 8.83333L8.58334 15L20 21.1667ZM20 31.2083L28.3333 26.7083V20.4167L20 25L11.6667 20.4167V26.7083L20 31.2083Z" fill="#CE0033"/>
                            </g>
                    </svg>
                        <h2>Formation en cours </h2>
                    </div></a>
                    <a href="#">
                    <div class="btn-navigate">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <mask id="mask0_9_52" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="40">
                                <rect width="40" height="40" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_9_52)">
                                <path d="M9.74992 28.4997C11.1666 27.4163 12.7499 26.5622 14.4999 25.9372C16.2499 25.3122 18.0833 24.9997 19.9999 24.9997C21.9166 24.9997 23.7499 25.3122 25.4999 25.9372C27.2499 26.5622 28.8333 27.4163 30.2499 28.4997C31.2221 27.3608 31.9791 26.0691 32.5208 24.6247C33.0624 23.1802 33.3333 21.6386 33.3333 19.9997C33.3333 16.3052 32.0346 13.1594 29.4374 10.5622C26.8402 7.96495 23.6944 6.66634 19.9999 6.66634C16.3055 6.66634 13.1596 7.96495 10.5624 10.5622C7.9652 13.1594 6.66659 16.3052 6.66659 19.9997C6.66659 21.6386 6.93742 23.1802 7.47909 24.6247C8.02075 26.0691 8.7777 27.3608 9.74992 28.4997ZM19.9999 21.6663C18.361 21.6663 16.9791 21.1038 15.8541 19.9788C14.7291 18.8538 14.1666 17.4719 14.1666 15.833C14.1666 14.1941 14.7291 12.8122 15.8541 11.6872C16.9791 10.5622 18.361 9.99968 19.9999 9.99968C21.6388 9.99968 23.0208 10.5622 24.1458 11.6872C25.2708 12.8122 25.8333 14.1941 25.8333 15.833C25.8333 17.4719 25.2708 18.8538 24.1458 19.9788C23.0208 21.1038 21.6388 21.6663 19.9999 21.6663ZM19.9999 36.6663C17.6944 36.6663 15.5277 36.2288 13.4999 35.3538C11.4721 34.4788 9.70825 33.2913 8.20825 31.7913C6.70825 30.2913 5.52075 28.5275 4.64575 26.4997C3.77075 24.4719 3.33325 22.3052 3.33325 19.9997C3.33325 17.6941 3.77075 15.5275 4.64575 13.4997C5.52075 11.4719 6.70825 9.70801 8.20825 8.20801C9.70825 6.70801 11.4721 5.52051 13.4999 4.64551C15.5277 3.77051 17.6944 3.33301 19.9999 3.33301C22.3055 3.33301 24.4721 3.77051 26.4999 4.64551C28.5277 5.52051 30.2916 6.70801 31.7916 8.20801C33.2916 9.70801 34.4791 11.4719 35.3541 13.4997C36.2291 15.5275 36.6666 17.6941 36.6666 19.9997C36.6666 22.3052 36.2291 24.4719 35.3541 26.4997C34.4791 28.5275 33.2916 30.2913 31.7916 31.7913C30.2916 33.2913 28.5277 34.4788 26.4999 35.3538C24.4721 36.2288 22.3055 36.6663 19.9999 36.6663ZM19.9999 33.333C21.4721 33.333 22.861 33.1177 24.1666 32.6872C25.4721 32.2566 26.6666 31.6386 27.7499 30.833C26.6666 30.0275 25.4721 29.4094 24.1666 28.9788C22.861 28.5483 21.4721 28.333 19.9999 28.333C18.5277 28.333 17.1388 28.5483 15.8333 28.9788C14.5277 29.4094 13.3333 30.0275 12.2499 30.833C13.3333 31.6386 14.5277 32.2566 15.8333 32.6872C17.1388 33.1177 18.5277 33.333 19.9999 33.333ZM19.9999 18.333C20.7221 18.333 21.3194 18.0969 21.7916 17.6247C22.2638 17.1525 22.4999 16.5552 22.4999 15.833C22.4999 15.1108 22.2638 14.5136 21.7916 14.0413C21.3194 13.5691 20.7221 13.333 19.9999 13.333C19.2777 13.333 18.6805 13.5691 18.2083 14.0413C17.736 14.5136 17.4999 15.1108 17.4999 15.833C17.4999 16.5552 17.736 17.1525 18.2083 17.6247C18.6805 18.0969 19.2777 18.333 19.9999 18.333Z" fill="#CE0033"/>
                            </g>
                    </svg>
                        <h2>Candidats rejeter </h2>
                    </div>
                    </a>
                    <a href="#">
                    <div class="btn-navigate">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <mask id="mask0_9_52" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="40">
                                <rect width="40" height="40" fill="#D9D9D9"/>
                            </mask>
                            <g mask="url(#mask0_9_52)">
                                <path d="M9.74992 28.4997C11.1666 27.4163 12.7499 26.5622 14.4999 25.9372C16.2499 25.3122 18.0833 24.9997 19.9999 24.9997C21.9166 24.9997 23.7499 25.3122 25.4999 25.9372C27.2499 26.5622 28.8333 27.4163 30.2499 28.4997C31.2221 27.3608 31.9791 26.0691 32.5208 24.6247C33.0624 23.1802 33.3333 21.6386 33.3333 19.9997C33.3333 16.3052 32.0346 13.1594 29.4374 10.5622C26.8402 7.96495 23.6944 6.66634 19.9999 6.66634C16.3055 6.66634 13.1596 7.96495 10.5624 10.5622C7.9652 13.1594 6.66659 16.3052 6.66659 19.9997C6.66659 21.6386 6.93742 23.1802 7.47909 24.6247C8.02075 26.0691 8.7777 27.3608 9.74992 28.4997ZM19.9999 21.6663C18.361 21.6663 16.9791 21.1038 15.8541 19.9788C14.7291 18.8538 14.1666 17.4719 14.1666 15.833C14.1666 14.1941 14.7291 12.8122 15.8541 11.6872C16.9791 10.5622 18.361 9.99968 19.9999 9.99968C21.6388 9.99968 23.0208 10.5622 24.1458 11.6872C25.2708 12.8122 25.8333 14.1941 25.8333 15.833C25.8333 17.4719 25.2708 18.8538 24.1458 19.9788C23.0208 21.1038 21.6388 21.6663 19.9999 21.6663ZM19.9999 36.6663C17.6944 36.6663 15.5277 36.2288 13.4999 35.3538C11.4721 34.4788 9.70825 33.2913 8.20825 31.7913C6.70825 30.2913 5.52075 28.5275 4.64575 26.4997C3.77075 24.4719 3.33325 22.3052 3.33325 19.9997C3.33325 17.6941 3.77075 15.5275 4.64575 13.4997C5.52075 11.4719 6.70825 9.70801 8.20825 8.20801C9.70825 6.70801 11.4721 5.52051 13.4999 4.64551C15.5277 3.77051 17.6944 3.33301 19.9999 3.33301C22.3055 3.33301 24.4721 3.77051 26.4999 4.64551C28.5277 5.52051 30.2916 6.70801 31.7916 8.20801C33.2916 9.70801 34.4791 11.4719 35.3541 13.4997C36.2291 15.5275 36.6666 17.6941 36.6666 19.9997C36.6666 22.3052 36.2291 24.4719 35.3541 26.4997C34.4791 28.5275 33.2916 30.2913 31.7916 31.7913C30.2916 33.2913 28.5277 34.4788 26.4999 35.3538C24.4721 36.2288 22.3055 36.6663 19.9999 36.6663ZM19.9999 33.333C21.4721 33.333 22.861 33.1177 24.1666 32.6872C25.4721 32.2566 26.6666 31.6386 27.7499 30.833C26.6666 30.0275 25.4721 29.4094 24.1666 28.9788C22.861 28.5483 21.4721 28.333 19.9999 28.333C18.5277 28.333 17.1388 28.5483 15.8333 28.9788C14.5277 29.4094 13.3333 30.0275 12.2499 30.833C13.3333 31.6386 14.5277 32.2566 15.8333 32.6872C17.1388 33.1177 18.5277 33.333 19.9999 33.333ZM19.9999 18.333C20.7221 18.333 21.3194 18.0969 21.7916 17.6247C22.2638 17.1525 22.4999 16.5552 22.4999 15.833C22.4999 15.1108 22.2638 14.5136 21.7916 14.0413C21.3194 13.5691 20.7221 13.333 19.9999 13.333C19.2777 13.333 18.6805 13.5691 18.2083 14.0413C17.736 14.5136 17.4999 15.1108 17.4999 15.833C17.4999 16.5552 17.736 17.1525 18.2083 17.6247C18.6805 18.0969 19.2777 18.333 19.9999 18.333Z" fill="#CE0033"/>
                            </g>
                    </svg>
                    <h2>Candidats en attente </h2>
                </div>
                    </a>
                <a href="#">
                <div class="btn-logout">
                    
                    <h2>Déconnexion</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <mask id="mask0_16_353" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="40">
                            <rect x="40" y="40" width="40" height="40" transform="rotate(180 40 40)" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_16_353)">
                            <path d="M31.6667 5C32.5833 5 33.3681 5.32639 34.0208 5.97917C34.6736 6.63194 35 7.41667 35 8.33333V31.6667C35 32.5833 34.6736 33.3681 34.0208 34.0208C33.3681 34.6736 32.5833 35 31.6667 35H20V31.6667H31.6667V8.33333H20V5H31.6667ZM13.3333 11.6667L15.625 14.0833L11.375 18.3333H25V21.6667H11.375L15.625 25.9167L13.3333 28.3333L5 20L13.3333 11.6667Z" fill="#CE0033"/>
                        </g>
                    </svg>
                </div>
                </a>
            </div>
        </div>

        <div class="container-page1">
            <div class="container-page">


                <div class="compteur-content">
                    <div class="compteur">
                    <span>{{ $formationsTotal }}</span>
                    </div>
                    <h3>Formations en cours</h3>
                </div>



                <div class="compteur-content">
                    <div class="compteur">
                    <span>{{ $formationAVenir }}</span>
                    
                </div>
                <h3>Formations a venir</h3>
                </div>


                <div class="compteur-content">
                    <div class="compteur">
                    <span>{{ $formationAVenir }}</span>
                    </div>
                    <h3>Candidatures reçu</h3>
                </div>


                <div class="compteur-content">
                    <div class="compteur">
                        <span>34</span>
                    </div>
                    <h3>Candidats sélectionner</h3>
                </div>

            </div>


                <div class="condidatures">

                <h1>Candidature</h1>
        @foreach($formations as $formation)

<div class="candidatures-diso">
<div class="candidature1">
<div class="candidature">
<h3>{{ $formation->nom}}</h3>
<h4>{{ $formation->statut }}</h4>
<h4>345 candidats</h4>
</div>
<a href="#">
<div class="btn-voir-candidature">
<span>Voir</span>
</div>
</a>

</div>
        @endforeach

</div>
</div>

</div>
</div>
<div class="imageDeFont"></div>

</div>

</body>
</html>
