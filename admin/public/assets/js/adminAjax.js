
// allow order
function Allow($id) {
  if (confirm('Confirm this order?')) {
    $.ajax({
      url: 'index.php?tab=orders',
      type: "POST",
      data: {
        allow_id: $id
      },
      success: function (data) {
        if (data) {
          alert(data);
          location.reload();
        }
      }
    })
  }
}

//allow comment
function commentApprovad($id) {
  if (confirm('Confirm this comment?')) {
    $.ajax({
      url: 'index.php?tab=comments',
      type: "POST",
      data: {
        comment_allow_id: $id
      },
      success: function (data) {
        if (data) {
          alert(data);
          location.reload();
        }
      }
    })
  }
}

delete category

function deleteCategory($id) {
  if (confirm('Are you want to delete?')) {
    $.ajax({
      url: 'index.php?tab=categories',
      type: "POST",
      data: {
        cd_id: $id
      },
      success: function (data) {
        if (data) {
          alert(data);
          location.reload();
        }
      }
    })
  }
}
//delete genre
function deleteGenre($id) {
  if (confirm('Are you want to delete?')) {
    $.ajax({
      url: 'index.php?tab=genres',
      type: "POST",
      data: {
        gd_id: $id
      },
      success: function (data) {
        if (data) {
          alert(data);
          location.reload();
        }
      }
    })
  }
}

//delete order
function deleteOrder($id) {
  if (confirm('Are you want to delete?')) {
    $.ajax({
      url: 'index.php',
      type: "POST",
      data: {
        od_id: $id
      },
      success: function (data) {
        if (data) {
          alert(data);
          location.reload();
        }
      }
    })
  }
}

//delete comment
function deleteComment($id) {
  if (confirm('Are you want to delete?')) {
    $.ajax({
      url: 'index.php',
      type: "POST",
      data: {
        commentd_id: $id
      },
      success: function (data) {
        if (data) {
          alert(data);
          location.reload();
        }
      }
    })
  }
}

//lock user
function lockUser($id) {
  if (confirm('Are you want to lock?')) {
    $.ajax({
      url: 'index.php',
      type: "POST",
      data: {
        lock_id: $id
      },
      success: function (data) {
        if (data) {
          alert(data);
          location.reload();
        }
      }
    })
  }
}

//unlock user
function unlockUser($id) {
  if (confirm('Are you want to unlock?')) {
    $.ajax({
      url: 'index.php',
      type: "POST",
      data: {
        unlock_id: $id
      },
      success: function (data) {
        if (data) {
          alert(data);
          location.reload();
        }
      }
    })
  }
}
