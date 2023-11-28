package covid.weka;

import java.sql.Connection;
import java.util.concurrent.TimeUnit;
import java.util.logging.Level;
import java.util.logging.Logger;

public class CovidWeka {

    public static void main(String[] args) throws Exception{
        Connection con = new ConnectionFactory().establishConnection();
        Predict predict = new Predict();
        Checker check = new Checker();
        int rows = check.checkCount(con);
        int newRows;

        while(true){
             newRows = check.checkCount(con);
             
                         if (newRows != rows) {

                rows = check.rowCount;

                String[] results = predict.predict(con);
                if (results != null) {
                    String prediction = results[0];
                    String Percentage = results[1];

                    SavePrediction sp = new SavePrediction(con);
                    
                    sp.save(prediction, Percentage, rows);

                }

                try {
                    TimeUnit.SECONDS.sleep(1);
                } catch (InterruptedException ex) {
                    Logger.getLogger(CovidWeka.class.getName()).log(Level.SEVERE, null, ex);
                }
            }
        }
      
            
     
    }

}
