# Setup-Stack


[Bài tập] Cài đặt cấu trúc Stack
Mục tiêu
Luyện tập cài đặt cấu trúc Stack.

Mô tả
Trong phần này, chúng ta sẽ luyện tập việc cài đặt cấu trúc Stack sử dụng ngôn ngữ PHP. Chúng ta sẽ cài đặt để hiểu kỹ hơn về ý nghĩa của Stack, còn trong thực tế thì có thể chúng ta sẽ ưu tiên các cấu trúc đã được xây dựng sẵn của ngôn ngữ PHP mà không sử dụng cấu trúc do chúng ta tự xây dựng.

Hướng dẫn
Bước 1: Khai báo lớp Stack với 2 thuộc tính:

$stack dùng để lưu các phần tử
$limit để quy định dung lượng của stack (số lượng tối đa các phần tử mà stack có thể chứa)
Bước 2: Khai báo constructor

Bước 3: Khai báo hàm push() để thêm phần tử vào stack

Sử dụng hàm array_unshift()
Thử nghiệm
Bước 4: Khai báo hàm pop() để lấy ra phần tử từ stack

Sử dụng hàm array_shift()
Thử nghiệm
Bước 5: Khai báo hàm top() để hiển thị phần tử trên cùng của stack

Thử nghiệm
Bước 6: Khai báo hàm isEmpty() để kiểm tra xem stack có rỗng hay không

Thử nghiệm
Bước 7: Thử nghiệm

Chạy lại toàn bộ các thử nghiệm với kịch bản:

Tạo stack
Thêm 5 phần tử vào stack
Lấy ra lần lượt 3 phần tử
Thêm 2 phần tử mới vào stack
Kiểm tra xem stack có rỗng hay không
Lấy ra 4 phần tử khỏi stack
Kiểm tra xem stack có rỗng hay không 
