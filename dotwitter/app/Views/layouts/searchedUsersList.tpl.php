<?php foreach ($searchedUsers as $users): ?>
    <ul class="dropdown-menu">
        <li>
            <div class="userbar-anchor">
                <div class="left-sidebar-user-icon">
                    <img class="sidebar-user-avatar img-fluid" src="/images/noavatar-icon" alt="...">
                </div>
                <div class="sidebar-user">
                    <span class="left-sidebar-fullname"><?php echo $users['full_name']; ?></span>
                    <span class="left-sidebar-username">@<?php echo $users['username']; ?></span>
                </div>
            </div>
        </li>
    </ul>
<?php endforeach; ?>