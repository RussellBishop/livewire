<style>

    .fade {
        position: absolute;
        top: 0;
        right: 0;
        width: 25%;
        height: 100%;
        margin: 0 !important;
        pointer-events: none;
    }

    .fade-white {
        background-image: linear-gradient(to left, rgba(248,248,248,1), rgba(248,248,248,0));
    }

    .fade-button {
        background-image: linear-gradient(to left, rgba(30,135,240,1), rgba(30,135,240,0));
    }

    .subnav {
        padding: .5rem;
/*        transform: translateY(-.4em);
        transition: transform .15s ease-out;*/
    }

    .subnav.is--open {
/*        transform: translateY(0em);
*/    }

    .subnav > * {
        display: block;
        width: 100%;
        text-align: left;
        padding: .8em;
        white-space: nowrap;
        border: 1px solid rgba(0,0,0,.1);
    }

    .subnav > * + * {
        border-top: none;
    }

    .nav a {
        padding: .8em .75em;
        white-space: nowrap;
    }

    tabs {
        background-color: rgba(0,0,0,.05);
    }


</style>
