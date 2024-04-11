'use strict'

var PostList = (function () {
  // Define shared variables
  var table = document.getElementById('table_posts')
  var datatable
  var toolbarBase
  var toolbarSelected
  var selectedCount

  var initPostsTable = function () {
    // Init datatable --- more info on datatables: https://datatables.net/manual/
    datatable = $(table).DataTable({
      info: false,
      order: [9],
      processing: true,
      serverSide: true,
      bFilter: false,
      scrollX: true,
      pageLength: 10,
      ajax: {
        url: '/home/blog/posts/get-posts',
      },
      lengthChange: false,
      columns: [
        { data: null },
        { data: 'title' },
        { data: 'author' },
        { data: 'status' },
        { data: null },
        { data: 'category' },
        { data: 'type' },
        { data: null },
        { data: null },
        { data: null },
      ],
      columnDefs: [
        {
          targets: 0,
          orderable: false,
          render: function (data) {
            return `<div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="${data.id}">
                    </div>`;
          },
        },

        {
          targets: 4,
          orderable: false,
          render: function (data) {
            return `<a href="/news/${data.slug}" target="_blank">Link</a>`;
          },
        },

        {
          targets: 7,
          orderable: false,
          render: function (row, data) {
            return `${row['created_at']}`;
          },
        },

        {
          targets: 8,
          orderable: false,
          render: function (row, data) {
            return `${row['updated_at']}`;
          },
        },

        {
          targets: 9,
          orderable: false,
          className: 'text-end',
          render: function (data, row) {
            let post_type;
            if(data.type == 'Full Post'){
              return `<!--begin::Action=-->
              <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">${lang.t('Actions')}
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
              <span class="svg-icon svg-icon-5 m-0">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                  </svg>
              </span>
              <!--end::Svg Icon--></a>
              <!--begin::Menu-->
              <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                      <a href="/home/blog/posts/full-post/edit/${data.id}" class="menu-link px-3">${lang.t('Edit')}</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                      <a href="/home/blog/posts/${data.id}" class="menu-link px-3" data-posts-table-filter="delete_row">${lang.t('Delete')}</a>
                  </div>
                  <!--end::Menu item-->
              </div>
              <!--end::Menu-->
          <!--end::Action=-->`
            } else {
              return `<!--begin::Action=-->
              <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">${lang.t('Actions')}
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
              <span class="svg-icon svg-icon-5 m-0">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                  </svg>
              </span>
              <!--end::Svg Icon--></a>
              <!--begin::Menu-->
              <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                      <a href="/home/blog/posts/edit/${data.id}" class="menu-link px-3">${lang.t('Edit')}</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                      <a href="/home/blog/posts/${data.id}" class="menu-link px-3" data-posts-table-filter="delete_row">${lang.t('Delete')}</a>
                  </div>
                  <!--end::Menu item-->
              </div>
              <!--end::Menu-->
          <!--end::Action=-->`
            }

          },
        },
      ],
    })

    // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
    datatable.on('draw', function () {
      initToggleToolbar()
      handleDeleteRows()
      toggleToolbars()
      KTMenu.createInstances()
    })
  }

  // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
  var handleSearchDatatable = () => {
    const filterSearch = document.querySelector(
      '[data-posts-table-filter="search"]',
    )
    filterSearch.addEventListener('keyup', function (e) {
      datatable.search(e.target.value).draw()
    })
  }

  // Filter Datatable
  var handleFilterDatatable = () => {
    // Select filter options
    const filterForm = document.querySelector(
      '[data-posts-table-filter="form"]',
    )
    const filterButton = filterForm.querySelector(
      '[data-posts-table-filter="filter"]',
    )
    const selectOptions = filterForm.querySelectorAll('select')

    // Filter datatable on submit
    filterButton.addEventListener('click', function () {
      var filterString = ''

      // Get filter values
      selectOptions.forEach((item, index) => {
        if (item.value && item.value !== '') {
          if (index !== 0) {
            filterString += ' '
          }

          // Build filter value options
          filterString += item.value
        }
      })

      // Filter datatable --- official docs reference: https://datatables.net/reference/api/search()
      datatable.search(filterString).draw()
    })
  }

  // Reset Filter
  var handleResetForm = () => {
    // Select reset button
    const resetButton = document.querySelector(
      '[data-posts-table-filter="reset"]',
    )

    // Reset datatable
    resetButton.addEventListener('click', function () {
      // Select filter options
      const filterForm = document.querySelector(
        '[data-posts-table-filter="form"]',
      )
      const selectOptions = filterForm.querySelectorAll('select')

      // Reset select2 values -- more info: https://select2.org/programmatic-control/add-select-clear-items
      selectOptions.forEach((select) => {
        $(select).val('').trigger('change')
      })

      // Reset datatable --- official docs reference: https://datatables.net/reference/api/search()
      datatable.search('').draw()
    })
  }

  // Delete post
  var handleDeleteRows = () => {
    // Select all delete buttons
    const deleteButtons = table.querySelectorAll('[data-posts-table-filter="delete_row"]')

    deleteButtons.forEach((d) => {
      // Delete button on click
      d.addEventListener('click', function (e) {
        e.preventDefault()

        // Select parent row
        const parent = e.target.closest('tr')

        // Get post title
        const postTitle = parent.querySelectorAll('td')[1].innerText
        const url = parent.querySelectorAll('td')[9].querySelectorAll('a')[2].href
        // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
        Swal.fire({
          text: 'Are you sure you want to delete ' + postTitle + '?',
          icon: 'warning',
          showCancelButton: true,
          buttonsStyling: false,
          confirmButtonText: 'Yes, delete!',
          cancelButtonText: 'No, cancel',
          customClass: {
            confirmButton: 'btn fw-bold btn-danger',
            cancelButton: 'btn fw-bold btn-active-light-primary',
          },
        }).then(function (result) {
          if (result.value) {
            Swal.fire({
              text: 'You have deleted ' + postTitle + '!.',
              icon: 'success',
              buttonsStyling: false,
              confirmButtonText: 'Ok, got it!',
              customClass: {
                confirmButton: 'btn fw-bold btn-primary',
              },
            })
              .then(function () {
                // Remove current row
                // axios.delete(url).then()
                axios.delete(url).then({});
                datatable.row($(parent)).remove().draw()
              })
              .then(function () {
                // Detect checked checkboxes
                toggleToolbars()
              })
          } else if (result.dismiss === 'cancel') {
            Swal.fire({
              text: customerName + ' was not deleted.',
              icon: 'error',
              buttonsStyling: false,
              confirmButtonText: 'Ok, got it!',
              customClass: {
                confirmButton: 'btn fw-bold btn-primary',
              },
            })
          }
        })
      })
    })
  }

  // Init toggle toolbar
  var initToggleToolbar = () => {
    // Toggle selected action toolbar
    // Select all checkboxes
    const checkboxes = table.querySelectorAll('[type="checkbox"]')

    // Select elements
    toolbarBase = document.querySelector('[data-posts-table-toolbar="base"]')
    toolbarSelected = document.querySelector(
      '[data-posts-table-toolbar="selected"]',
    )
    selectedCount = document.querySelector(
      '[data-posts-table-select="selected_count"]',
    )
    const deleteSelected = document.querySelector(
      '[data-posts-table-select="delete_selected"]',
    )

    // Toggle delete selected toolbar
    checkboxes.forEach((c) => {
      // Checkbox on click event
      c.addEventListener('click', function () {
        setTimeout(function () {
          toggleToolbars()
        }, 50)
      })
    })

    // Deleted selected rows
    deleteSelected.addEventListener('click', function () {
      // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
      Swal.fire({
        text: 'Are you sure you want to delete selected posts?',
        icon: 'warning',
        showCancelButton: true,
        buttonsStyling: false,
        confirmButtonText: 'Yes, delete!',
        cancelButtonText: 'No, cancel',
        customClass: {
          confirmButton: 'btn fw-bold btn-danger',
          cancelButton: 'btn fw-bold btn-active-light-primary',
        },
      }).then(function (result) {
        if (result.value) {
          Swal.fire({
            text: 'You have deleted all selected posts!.',
            icon: 'success',
            buttonsStyling: false,
            confirmButtonText: 'Ok, got it!',
            customClass: {
              confirmButton: 'btn fw-bold btn-primary',
            },
          })
            .then(function () {
              // Remove all selected customers
              checkboxes.forEach((c) => {
                if (c.checked) {
                    // Remove current row
                  axios.delete('/home/blog/posts/'+c.value).then();
                  datatable.row($(c.closest('tbody tr'))).remove().draw()
                }
              })

              // Remove header checked box
              const headerCheckbox = table.querySelectorAll('[type="checkbox"]',)[0]
              headerCheckbox.checked = false
            })
            .then(function () {
              toggleToolbars() // Detect checked checkboxes
              initToggleToolbar() // Re-init toolbar to recalculate checkboxes
            })
        } else if (result.dismiss === 'cancel') {
          Swal.fire({
            text: 'Selected customers was not deleted.',
            icon: 'error',
            buttonsStyling: false,
            confirmButtonText: 'Ok, got it!',
            customClass: {
              confirmButton: 'btn fw-bold btn-primary',
            },
          })
        }
      })
    })
  }

  // Toggle toolbars
  const toggleToolbars = () => {
    // Select refreshed checkbox DOM elements
    const allCheckboxes = table.querySelectorAll('tbody [type="checkbox"]')

    // Detect checkboxes state & count
    let checkedState = false
    let count = 0

    // Count checked boxes
    allCheckboxes.forEach((c) => {
      if (c.checked) {
        checkedState = true
        count++
      }
    })

    // Toggle toolbars
    if (checkedState) {
      selectedCount.innerHTML = count
      toolbarBase.classList.add('d-none')
      toolbarSelected.classList.remove('d-none')
    } else {
      toolbarBase.classList.remove('d-none')
      toolbarSelected.classList.add('d-none')
    }
  }

  return {
    // Public functions
    init: function () {
      if (!table) {
        return
      }
      initPostsTable()
      initToggleToolbar()
      handleSearchDatatable()
      handleResetForm()
      handleDeleteRows()
      handleFilterDatatable()
    },
  }
})()

// On document ready
KTUtil.onDOMContentLoaded(function () {
  PostList.init()
})
