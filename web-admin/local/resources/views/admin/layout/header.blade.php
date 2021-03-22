<a href="#" class="sidebar-toggle" data-toggleclass="sidebar-open" data-target="body"> </a>

<script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    document.getElementById("shwTime").innerHTML = d.toLocaleTimeString();
}
</script>
    <nav class=" mr-auto my-auto">
        <ul class="nav align-items-center">
            <li class="nav-item" style="margin-left: 50px">
            <form action="{{ Asset(env('admin').'/search') }}">
            <input type="text" name="q" class="form-control" style="width:700px;padding: 20px 20px" placeholder="Nhập ID đơn hàng hoặc số điện thoại khách hàng">
            </form>
            </li>
        </ul>
    </nav>
<nav class=" ml-auto">
    <ul class="nav align-items-center">
    <li style="font-size: 20px">&nbsp;&nbsp;&nbsp;<i class="mdi mdi-calendar-clock"></i> <span id="shwTime"></span></li>
        <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#"   role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
               <div class="avatar avatar-sm avatar-online">
                        <span class="avatar-title rounded-circle bg-dark">K</span>

                    </div>
            </a>
            <div class="dropdown-menu  dropdown-menu-right"   >
                <a class="dropdown-item" href="{{ Asset(env('admin').'/home') }}">  Tổng quan </a><hr>
                <a class="dropdown-item" href="{{ Asset(env('admin').'/setting') }}">  Cài đặt tài khoản </a><hr>
                <a class="dropdown-item" href="{{ Asset(env('admin').'/logout') }}">  Thoát </a>
            </div>
        </li>
    </ul>
</nav>