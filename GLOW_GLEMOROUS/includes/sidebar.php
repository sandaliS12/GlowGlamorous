<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu begin-->
    <div class="panel-heading"><!-- panel-heading begin-->
        <h3 class="panel-title">Product Categories</h3>
    </div><!-- panel-heading finish-->

    <div class="panel-body"><!-- panel-body begin-->
        <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu begin-->

        <?php
            getItemcat();

        ?>

        </ul><!-- nav nav-pills nav-stacked category-menu finish-->

    </div><!-- panel-body finish-->
</div> <!-- panel panel-default sidebar-menu finish-->


<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu begin-->
    <div class="panel-heading"><!-- panel-heading begin-->
        <h3 class="panel-title">Categories</h3>
    </div><!-- panel-heading finish-->

    <div class="panel-body"><!-- panel-body begin-->
        <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu begin-->

        <?php
            getMainitemcat();

        ?>
           

        </ul><!-- nav nav-pills nav-stacked category-menu finish-->

    </div><!-- panel-body finish-->
</div> <!-- panel panel-default sidebar-menu finish-->