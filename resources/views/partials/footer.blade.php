<div class="container d-flex justify-content-evenly ">
    <ul class="list-group  text-white">
    <h6 class="text-uppercase text-primary">About us</h6>
        <a>lorem4</a>
        <a>lorem4</a>
        <a>lorem4</a>
        <a>lorem4</a>
    </ul>
     <ul class="list-group text-white">
     <h6 class="text-uppercase text-primary">Work with us</h6>
        <a>lorem4</a>
        <a>lorem4</a>
        <a>lorem4</a>
        <a>lorem4</a>
    </ul>
     <ul class="list-group text-white">
     <h6 class="text-uppercase text-primary">Academy</h6>
        <a>lorem4</a>
        <a>lorem4</a>
        <a>lorem4</a>
        <a>lorem4</a>
    </ul>
</div>

<style>
.container {
    padding: 1rem;

    & ul {
        >h6 {
            transform: skewx(-5deg);

            @media screen and(max-width: 450px){
                font-size: .6rem;
            }
        }

        & a {
            text-align: left;
            color: white;

            @media screen and(max-width: 450px){
                font-size: small;
            }
        }
    }
}
</style>