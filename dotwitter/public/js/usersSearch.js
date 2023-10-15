document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.querySelector(".input-users-search");
    const searchResults = document.querySelector(".search-results");

    searchInput.addEventListener("input", function() {
        const keyword = searchInput.value.trim();
        if (keyword.length > 0) {
            fetch("/users-search", {
                method: "POST",
                headers: {"Content-Type": "application/json"},
                body: JSON.stringify({ keyword }),
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const users = data.user;
                        let userListHTML = "";
                        users.forEach(user => {
                            userListHTML += `
                                <li>
                                    <div class="userbar-anchor">
                                        <div class="left-sidebar-user-icon">
                                            <a class="profile-link-ref" 
                                                href="/profile/${user.username}">
                                                <img class="sidebar-user-avatar img-fluid" src="/images/noavatar-icon" alt="...">
                                            </a>
                                        </div>
                                        <div class="sidebar-user">
                                            <a class="left-sidebar-fullname profile-link-ref" 
                                                href="/profile/${user.username}">${user.full_name}
                                            </a>
                                            <a class="left-sidebar-username profile-link-ref" 
                                                href="/profile/${user.username}">@${user.username}
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            `;
                        });
                        searchResults.innerHTML = userListHTML;
                    } else {
                        searchResults.innerHTML = "<li>No results found</li>";
                    }
                })
                .catch(error => {
                    console.error("Error fetching user data:", error);
                    searchResults.innerHTML = "<li>Error fetching user data</li>";
                });
        } else {
            searchResults.innerHTML = "";
        }
    });
});
