function check(question_no, selected_no, valid_no) {
    const answerlist = document.getElementsByName("answerlist_" + question_no);
    answerlist.forEach(answer => {
        answer.style.pointerEvents = "none";;
    });

    const answertext = document.getElementById("answertext_" + question_no);
    if (selected_no == valid_no) {
        answertext.innerHTML = "正解！";
        answertext.className = "answerbox_valid";
    } else {
        answertext.innerHTML = "不正解！";
        answertext.className = "answerbox_invalid";
    }

    const answerbox = document.getElementById("answerbox_" + question_no);
    answerbox.style.display = "block";

    const selected = document.getElementById("answerlist_" + question_no + "_" + selected_no);
    selected.className = "answer_invalid";
    const valid = document.getElementById("answerlist_" + question_no + "_" + 1);
    valid.className = "answer_valid";
}
