package SESI7;

/**
 *
 * @author ACER
 */
public class Bukualamat {
    public static void main(String[] args) {
        String bukuAlamat[][] = {{"Suisei", "735-1234", "Kyoto"}, {"Ole Gunnar", "983-3333", "Manchester"}, {"Xavi", "28-0331", "Catalan"}};

        for(int i = 0; i < bukuAlamat.length; i++) {
           
                System.out.println("Nama : "+bukuAlamat[i][0] +
                                   "\nTel : " + bukuAlamat[i][1] + 
                                   "\nAddress : " + bukuAlamat[i][2] + "\n"
                );
            
        }
        
        
    }
}
