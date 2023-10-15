<?php foreach ($searchedUsers as $users): ?>
        <li>
            <div class="userbar-anchor">
                <div class="left-sidebar-user-icon">
                    <a class="profile-link-ref"
                       href="/profile/<?php echo $users['username']; ?>">
                        <img class="sidebar-user-avatar img-fluid" src="/images/noavatar-icon" alt="...">
                    </a>
                </div>
                <div class="sidebar-user">
                    <a class="left-sidebar-fullname profile-link-ref-fullname"
                       href="/profile/<?php echo $users['username']; ?>">
                        <?php echo $users['full_name']; ?>
                    </a>
                    <a class="left-sidebar-username profile-link-ref"
                       href="/profile/<?php echo $users['username']; ?>">
                        @<?php echo $users['username']; ?>
                    </a>
                </div>
            </div>
        </li>
<?php endforeach; ?>

