<nav class="active" id="sidebar">
    <ul class="list-unstyled lead">
        <li class="active">
            <a href=""><i class="fa fa-home fa-sm" style="margin-right: 10px"></i> Home</a>
        </li>
        <li>
            <a href="{{ url('/orders') }}"><i class="fa fa-box fa-sm" style="margin-right: 10px"></i> Orders</a>
        </li>
        <li>
            <a href="{{ url('/transactions') }}"><i class="fa fa-money-bill fa-sm" style="margin-right: 10px"></i>
                Transactions</a>
        </li>
        <li>
            <a href="{{ url('/products') }}"><i class="fa fa-truck fa-sm" style="margin-right: 15px"></i>Products</a>
        </li>
    </ul>
</nav>


<style>
    #sidebar ul.lead {
        border-bottom: 1px solid #47748b;
        width: fit-content;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
        width: 30vh;
        color: #008b8b;
        text-decoration: none;
    }

    #sidebar ul li a:hover {

        color: #fff;
        background: #008B8B;
        text-decoration: none !important;
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        color: #fff;
        background: #008B8B;
    }
</style>
