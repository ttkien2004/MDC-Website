function getSubjectInfo(index){
    let subject_content = '';
            
    subject_content_arr[index].forEach((info) => {
        subject_content += `
        <div class="lesson-content-container">
            <div class="Name">
                <img src="${info.lesson_icon}">
                <div class="lesson-name">
                    <div class="n1">${info.lesson_name}</div>
                    <div class="n2">${info.lesson_type}</div>
                </div>
            </div>
            <div class="deadline">${info.deadline}</div>
            <div class="complete">${info.complete}</div>
            <div class="Status"><img src="${info.status}"></div>
        </div>`
    });
    return subject_content;
}