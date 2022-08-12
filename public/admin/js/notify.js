$(document).ready(function() {
    $('.notify').click(function (){
        const id = $(this).data('id');
        const author_name = $(this).data('author');
        const book_name = $(this).data('book_name');
        const issue_date = $(this).data('issue_date');
        const return_date = $(this).data('return_date');
        const returndate = $(this).data('returndate');
        const user_name = $(this).data('user_name');
        const user_id = $(this).data('user_id');

        let unit_fee = 10;
        let today = new Date();
        let returnDate = new Date(returndate);
        let diff = Math.abs(today.getTime() - returnDate.getTime());
        let in_days = Math.round(diff / (1000 * 3600 * 24));
        let total_amount = in_days * unit_fee;

        $('#id').val(id);
        $('#book_name').text(book_name);
        $('#author_name').text(author_name);
        $('#issue_date').text(issue_date);
        $('#return_date').text(return_date);
        $('#requested_user').text(user_name);
        $('#user_id').val(user_id);
        $('#amount').val(total_amount);
    });
});