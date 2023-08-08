<style>
    .infy-loader {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #outline {
        stroke-dasharray: 2.427766571px, 242.7766571045px;
        stroke-dashoffset: 0;
        animation: anim 1.6s linear infinite;
    }

    @keyframes anim {
        12.5% {
            stroke-dasharray: 33.9887319946px, 242.7766571045px;
            stroke-dashoffset: -26.7054322815px;
            stroke: #455662;
        }
        43.75% {
            stroke-dasharray: 84.9718299866px, 242.7766571045px;
            stroke-dashoffset: -84.9718299866px;
            stroke: #f5981c;
        }
        50% {
            stroke-dasharray: 94.9718299866px, 242.7766571045px;
            stroke-dashoffset: -94.9718299866px;
            stroke: red;
        }
        to {
            stroke-dasharray: 2.427766571px, 242.7766571045px;
            stroke-dashoffset: -240.3488905334px;
            stroke: #00c6ff;
        }
    }
</style>

<div class="infy-loader" id="overlay-screen-lock">
    <svg class="loader-position" width="150px" height="75px" viewBox="0 0 187.3 93.7" preserveAspectRatio="xMidYMid meet">
        <path id="outline" fill="none" stroke="#00c6ff" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
              d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1
            c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z"></path>
    </svg>
</div>
