import java.math.BigDecimal;

public class Balance {

	private BigDecimal amount;
	private boolean newUser;

	public Balance() {
		amount = new BigDecimal(0);
		newUser = false;
	}

	public Balance(double amount) {
		this.amount = new BigDecimal(amount);
	}

	public Balance (double amount, boolean newUser) {
		this.amount = new BigDecimal(amount);
		this.newUser = newUser;
	}

	public void setBalance(BigDecimal amount) {
		this.amount = this.amount.add(amount);
	}

	public BigDecimal getAmount() {
		return amount;
	}

	// Save the current balance to the database.
	public void save() {

	}

}
