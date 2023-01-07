$(document).ready(function(){
  "use strict";
// filter

  filter_data();
  
  function filter_data(page)
  {
    let csrfHash = $('.estimasi').val();
    let csrfName = $('.estimasi').attr('name');
    var kategori = get_filter('kategori');
    var warna = get_filter('warna');
    var bahan = get_filter('bahan');
    var berat = get_filter('berat');
    var volume = get_filter('volume');
    // var sort = get_filter('sort');
    let sort = $("select[name=sort]").val();
    $.ajax({
           url:"http://localhost:8080/Katalog",
          method:'POST',
          dataType: 'json',
          data:{sort:sort,kategori:kategori,warna:warna,bahan:bahan,page:page,berat:berat,volume:volume,[csrfName]: csrfHash},
          cache:false,
          success: function(data) {
            let catalogue = data.catalogue;
            $('.product').html(catalogue);
            $('.pager').html(data.pager);
            $('#modal_filter').modal('hide');
            $('#modal_sort').modal('hide');
            document.getElementsByClassName('estimasi')[0].value = data.token;
          }
      });
    }

    $('#clear_filter').onclick = function(){

      var kategori = document.getElementsByClassName('kategori');
  
      for(var count = 0; count < kategori.length; count++)
      {
          kategori[count].checked = false;
      }  
  }

  function get_filter(class_name)
  {
      var filter = [];
      $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        }); 
        return filter;
  }

  $(document).on('click', 'ul.pagination li a', function(e) {
    e.preventDefault();
    let csrfHash = $('.estimasi').val();
    let csrfName = $('.estimasi').attr('name');
    var page = $(this).data('page');
    filter_data(page,csrfHash,csrfName);
  });

  $('.common_selector').click(function(){
    filter_data();
  });


  $('.cek_harga').on("click", function() {
    let csrfHash = $('.estimasi').val();
    let csrfName = $('.estimasi').attr('name');
    let qty = document.querySelector('input[name=qty]').value;
    let produk = document.querySelector('input[name=produk]').value;
    if(qty < 1000){
       Swal.fire('Maaf, jumlah pesanan yang anda masukan kurang dari minimum pesanan yang ditetapkan');
      } else if(qty > 29999) {
      Swal.fire({
        title: 'Maaf',
        text: "Kuantiti yang anda masukan sangat berpotensi mendapat harga special :) Silahkan hubungu admin kami untuk informasi lebih lanjut",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#025c4c',
        cancelButtonColor: '#d33',
        confirmButtonText: '<i class="fab fa-fw fa-whatsapp"></i> Whatsapp'
      }).then((result) => {
        if (result.isConfirmed) {
          window.open('whatsapp://send?text=Saya ingin pesan lebih dari 30.0000 pcs&phone=+6282246283108', '_blank')
        }
      });
    } else {
      $.ajax({
        url:"http://localhost:8080/Cek_harga/",
        method:'POST',
        dataType: 'json',
        data:{produk:produk,qty:qty,[csrfName]: csrfHash},
        cache:false,
        success: function(data) {
          const harga = document.getElementsByClassName('harga')[0];
          const total = document.getElementsByClassName('total')[0];
          const wa_ajp = document.getElementsByClassName('wa_ajp')[0];
          harga.innerHTML = data.harga;
          total.innerHTML = data.total;
        }
      });
    }
  });

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    if (all) {
      select(el, all).forEach(e => e.addEventListener(type, listener))
    } else {
      select(el, all).addEventListener(type, listener)
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Clients Slider
   */
  new Swiper('.clients-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 4,
        spaceBetween: 40
      },
      480: {
        slidesPerView: 4,
        spaceBetween: 60
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 80
      },
      992: {
        slidesPerView: 6,
        spaceBetween: 120
      }
    }
  });


  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfokio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40
      },

      1200: {
        slidesPerView: 3,
      }
    }
  });

  /**
   * Animation on scroll
   */
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });

  /**
   * Initiate Pure Counter 
   */
  new PureCounter();
});

const Editor_blog = document.getElementById("editor");
if(Editor_blog){
CKEDITOR.ClassicEditor.create(Editor_blog, {
    // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
    toolbar: {
        items: [
            'exportPDF','exportWord', '|',
            'findAndReplace', 'selectAll', '|',
            'heading', '|',
            'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
            'bulletedList', 'numberedList', 'todoList', '|',
            'outdent', 'indent', '|',
            'undo', 'redo',
            '-',
            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
            'alignment', '|',
            'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
            'specialCharacters', 'horizontalLine', 'pageBreak', '|',
            'textPartLanguage', '|',
            'sourceEditing'
        ],
        shouldNotGroupWhenFull: true
    },
    // Changing the language of the interface requires loading the language file using the <script> tag.
    // language: 'es',
    list: {
        properties: {
            styles: true,
            startIndex: true,
            reversed: true
        }
    },
    // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
    heading: {
        options: [
            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
            { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
            { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
            { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
            { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
        ]
    },
    // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
    placeholder: 'Write your content here!',
    // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
    fontFamily: {
        options: [
            'default',
            'Arial, Helvetica, sans-serif',
            'Courier New, Courier, monospace',
            'Georgia, serif',
            'Lucida Sans Unicode, Lucida Grande, sans-serif',
            'Tahoma, Geneva, sans-serif',
            'Times New Roman, Times, serif',
            'Trebuchet MS, Helvetica, sans-serif',
            'Verdana, Geneva, sans-serif'
        ],
        supportAllValues: true
    },
    // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
    fontSize: {
        options: [ 10, 12, 14, 'default', 18, 20, 22 ],
        supportAllValues: true
    },
    // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
    // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
    htmlSupport: {
        allow: [
            {
                name: /.*/,
                attributes: true,
                classes: true,
                styles: true
            }
        ]
    },
    // Be careful with enabling previews
    // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
    htmlEmbed: {
        showPreviews: true
    },
    // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
    link: {
        decorators: {
            addTargetToExternalLinks: true,
            defaultProtocol: 'https://',
            toggleDownloadable: {
                mode: 'manual',
                label: 'Downloadable',
                attributes: {
                    download: 'file'
                }
            }
        }
    },
    // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
    mention: {
        feeds: [
            {
                marker: '@',
                feed: [
                    '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                    '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                    '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                    '@sugar', '@sweet', '@topping', '@wafer'
                ],
                minimumCharacters: 1
            }
        ]
    },
    // The "super-build" contains more premium features that require additional configuration, disable them below.
    // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
    removePlugins: [
        // These two are commercial, but you can try them out without registering to a trial.
        // 'ExportPdf',
        // 'ExportWord',
        'CKBox',
        'CKFinder',
        'EasyImage',
        // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
        // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
        // Storing images as Base64 is usually a very bad idea.
        // Replace it on production website with other solutions:
        // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
        // 'Base64UploadAdapter',
        'RealTimeCollaborativeComments',
        'RealTimeCollaborativeTrackChanges',
        'RealTimeCollaborativeRevisionHistory',
        'PresenceList',
        'Comments',
        'TrackChanges',
        'TrackChangesData',
        'RevisionHistory',
        'Pagination',
        'WProofreader',
        // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
        // from a local file system (file://) - load this site via HTTP server if you enable MathType
        'MathType'
    ]
});

}
// Add comments
const news_comments = document.querySelector(".news_comments");
const btn_commenter = document.querySelector(".btn-commenter");
const btn_cancel = document.querySelector(".btn-cancel");
const add_reply_1 = document.querySelector(".add_reply_1");

news_comments.onfocus = function() {
  btn_commenter.style.display="block";
};

btn_cancel.onclick = function(){
  btn_commenter.style.display = 'none';
  news_comments.value = '';
  }

const reply = document.querySelectorAll(".reply-popup");
const form_reply = document.querySelectorAll('.reply-box');
for (let i = 0; i < reply.length; i++) {
    console.log(add_reply_1[i]);
      reply[i].addEventListener('click', function() {
          if(form_reply[i].style.display === "block"){
              form_reply[i].style.display = "none";
              reply[i].innerHTML = 'Reply';
          }else{
              reply[i].innerHTML = 'Hide';
              form_reply[i].style.display = "block";
          }
      });
}

const show_replies = document.querySelectorAll('.show-replies');
const replies = document.querySelectorAll('.replied');
for (let i = 0; i < show_replies.length; i++) {
    show_replies[i].style.cursor = "pointer";
    show_replies[i].addEventListener('click', function() {
        if (replies[i].style.display === "block") {
            replies[i].style.display = "none";
            show_replies[i].innerHTML = '<i class="las la-lw la-chevron-down"></i> View replies';
          } else {
              replies[i].style.display = "block";
              show_replies[i].innerHTML = '<i class="las la-lw la-chevron-up"></i> Hide replies';
          }
});
}

const report = document.querySelectorAll('.report');
for (let i = 0; i < report.length; i++) {
	report[i].style.cursor = "pointer";
	report[i].addEventListener('click', function() {
		let id_comment = report[i].dataset.id_comment;
		$(".modal-body #id_comment").val(id_comment);
	});
}

