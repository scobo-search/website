<template>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                <img alt="Scobo Logo" src="/scobo-logo.svg"/>
            </div>

            <div class="links">
                <a href="https://scobo.dev/docs">Docs</a>
                <a href="https://github.com/scobo-search">GitHub</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: () => ({})
    }
</script>

<style>
    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        font-family: 'Orbitron', sans-serif;
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
