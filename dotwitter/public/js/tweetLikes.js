// ******* TWEET LIKES *********
document.addEventListener("DOMContentLoaded", function () {
    const tweetsLikeBtn = document.querySelector(".tweet-likes-btn");

    if (tweetsLikeBtn) {
        tweetsLikeBtn.addEventListener("click", function (event) {
            const target = event.target;

            if (target.classList.contains("tweet-likes-btn")) {
                const tweetId = target.getAttribute("data-tweet-id");
                const likesNumberElement = target.querySelector(".tweet-likes-number");
                const isLiked = parseInt(target.getAttribute("data-liked")) === 1;

                const newLikedStatus = !isLiked;

                fetch(`/like-tweet?tweetId=${tweetId}&liked=${newLikedStatus ? '1' : '0'}`, {
                    method: "POST",
                })
                    .then((response) => response.json())
                    .then((data) => {
                        if (data.success) {
                            if (newLikedStatus) {
                                likesNumberElement.textContent = parseInt(likesNumberElement.textContent) + 1;
                                target.classList.add("liked");
                                target.setAttribute("data-liked", "1");
                                target.querySelector(".tweet-likes-svg").setAttribute("fill", "red");
                            } else {
                                likesNumberElement.textContent = parseInt(likesNumberElement.textContent) - 1;
                                target.classList.remove("liked");
                                target.setAttribute("data-liked", "0");
                                target.querySelector(".tweet-likes-svg").setAttribute("fill", "currentColor");
                            }
                        }
                    })
                    .catch((error) => {
                        console.error("Error:", error);
                    });
            }
        });
    }
});