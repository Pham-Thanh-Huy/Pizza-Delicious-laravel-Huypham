public void addStudent() {
    Scanner sc = new Scanner(System.in);
    StudentDao studentDao = new StudentDao(); // Giả sử bạn có một đối tượng StudentDao

    String idStudent, nameStudent, genderStudent, rankedAcademicStudent;
    int ageStudent;

    while (true) {
        System.out.print("Nhập Id sinh viên: ");
        idStudent = sc.nextLine();

        if (studentDao.checkExistsId(idStudent)) {
            System.out.println("ID đã tồn tại. Vui lòng nhập lại.");
            continue;
        }

        System.out.print("Nhập tên sinh viên: ");
        nameStudent = sc.nextLine();

        System.out.print("Nhập tuổi sinh viên: ");
        try {
            ageStudent = Integer.parseInt(sc.nextLine());

            if (ageStudent < 0) {
                System.out.println("Tuổi không hợp lệ. Vui lòng nhập lại.");
                continue;
            }
        } catch (NumberFormatException e) {
            System.out.println("Tuổi không hợp lệ. Vui lòng nhập lại.");
            continue;
        }

        System.out.print("Nhập Giới tính sinh viên: ");
        genderStudent = sc.nextLine();

        System.out.print("Nhập Hoc lực sinh viên: ");
        rankedAcademicStudent = sc.nextLine();

        // Tạo đối tượng sinh viên sau khi đã nhập đúng thông tin
        Student student = new Student(idStudent, nameStudent, ageStudent, genderStudent, rankedAcademicStudent);

        // Lưu sinh viên vào cơ sở dữ liệu hoặc danh sách sinh viên
        studentDao.addStudent(student);

        System.out.println("Thêm sinh viên thành công.");
        break;
    }

    sc.close();
}
